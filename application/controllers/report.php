<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller {

    public function index() {

		$stats = $this->tracker_lib->track('report');
		$this->db->insert('tracker', $stats);

        $hash = $this->uri->segment(2);
        if ($hash) {
            // retreive report by hash
            $report = $this->Report_model->retrieve_report($hash);
			// ds($report,1);

			if ($report == '') { show_404(); }
            // retreive synopsis for this report
            $synopsis = $this->Synopsis_model->synopsis($report->project_id);
		//	ds($synopsis);
		//	$objective = $this->Objectives_model->get_objective($report->project_id);
			$assignment = $this->Objectives_model->get_assignment($report->assignment_hash);

			//ds($assignment,1);

			// this really should not appear
			// TODO: handle empty reports before this happens!
			if (empty($synopsis)) {die('empty report!'); }

			// get comments for this report
			$comments = $this->Comment_model->get_comments($hash);

            $report_url = site_url() . 'report/' . $hash;
            $report_url_length = strlen($report_url);
            // create view
            $data = array(
            	'student_name' => $report->student_name,
                'synopsis' => $synopsis,
                'assignment_id' => $report->assignment_hash,
                'synopsis_id' => $report->project_id,
                'objective' => $assignment->objective,
                'steps' => $assignment->steps,
                'project_id' => $synopsis[0]->project_id,
                'elapsed_time' => $report->elapsed_time,
                'project_title' => $report->project_title,
                'date' => date('F j, Y', $synopsis[0]->time),
                'hash' => $hash,
                'report_url' => $report_url,
                'report_url_length' => $report_url_length,
                'timezone' => $report->timezone,
                'comments' => $comments
            );
           $this->load->view('report_view', $data);
        }
    }
}