<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email extends CI_Controller {

    public function index() {}

	public function build_report($data) {
		extract($data);
        $data = array(
            'synopsis' => $synopsis,
            'objective' => $objective,
            'project_id' => $synopsis[0]->project_id,
            'elapsed_time' => $report->elapsed_time,
            'project_title' => $report->project_title,
            'date' => date('F j, Y', $synopsis[0]->time),
            'hash' => $hash,
            'timezone' => $report->timezone
        );
		return $this->load->view('report_email_view', $data, TRUE);
	}

	public function email_report() {
		if (isset($_POST['hash'])) {
			$email_address = $_POST['address'];
			//$cc = 'this@that.com'; // TODO: add to config or an admin view
			$bcc = 'csantala@gmail.com'; // same

			$synopsis_subject = 'syn subj'; // ..

			// get report data for this hash (again.)
			$report = $this->Report_model->retrieve_report(($_POST['hash']));
			$hash = $report->hash;
			$synopsis = $this->Synopsis_model->synopsis($report->project_id);
			$objective = $this->Objectives_model->get_objective($report->project_id);
			$email_body = $this->build_report(compact('report', 'synopsis', 'hash', 'objective'));

			$this->load->library('email');
			$config['mailtype'] = 'html';
			$this->email->initialize($config);

			$this->email->from('snopzmini.com', 'Synopsis Report');
			$this->email->to($email_address);
			//$this->email->cc($cc);
			$this->email->bcc($bcc);

			$this->email->subject($objective);
			$this->email->message($email_body);

			$this->email->send();

			//error_log( $this->email->print_debugger());
		}
	}

}