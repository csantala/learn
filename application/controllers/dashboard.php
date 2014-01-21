<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
//		check_for_admin();
		$stats = $this->tracker_lib->track('dashboard');
		$this->db->insert('tracker', $stats);

    }

	public function index() {
		// dashboard hash handling
		if($this->uri->segment(2)) {
			$dashboard_hash = $this->uri->segment(2);
			$synopsis_hash = time();
			$assignment_hash = $this->uri->segment(3);
			$assignment = $this->Objectives_model->get_assignment($assignment_hash);
			if ($assignment == '') { show_404(); }
			$scanner_data = $this->Synopsis_model->scanner($assignment_hash);

			$steps = $this->Step_model->get_steps($assignment_hash);

			$view_data = array(
				'objective' => isset($assignment->objective) ? $assignment->objective : '',
			//	'steps' => isset($assignment->steps) ? $assignment->steps : '',
				'assignment_hash' => $assignment_hash,
				'synopsis_url' => site_url() . $synopsis_hash . '/' . $assignment_hash,
				'assignment_url' => site_url() . 'assignment/' . $assignment_hash,
				'scanner_data' => $scanner_data,
				'steps' => $steps
			);
		 	$this->load->view('dashboard_view', $view_data);
		} else {
	        $stats = $this->tracker_lib->track('assign');
	        $this->db->insert('tracker', $stats);

			// receive post from teacher, prepare a synopsis sheet for it, email link to student
			if (! empty($_POST)) {
				$teacher_email = $_POST['teacher_email'];
				$objective = $_POST['objective'];
				$steps = $_POST['steps'];

				$assignment_hash = $_POST['assignment_hash'];

				$data = array(
					'project_id' => $assignment_hash,
					'objective' => $objective,
					'steps' => $steps,
					'teacher_email' => $teacher_email
				);

				// write objective and hash to db
				$this->Objectives_model->update_objective($data);

				// redirect loads editor with objective from hash
				/*
				$view_data = array(
					'objective' => $objective,
					'steps' => $steps,
					'hash' => $hash,
					'synopsis_url' => site_url() . 'assignment/' . $assignment_hash . '/' . $synopsis_hash
				);
				*/
				redirect(site_url() . 'assignment/' . $assignment_hash);
				//$this->load->view('assignment_view', $view_data);
				//	ds($_POST,1);
			} else {
				show_404();
				// TODO: proper hashing
				$dashboard_hash = time();

				$view_data = array(
					'dashboard_hash' => $dashboard_hash,
					'objective' => 'set objective',
					'date' => time()
				);
				$this->load->view('dashboard_view', $view_data);
			}
		}
	}
}