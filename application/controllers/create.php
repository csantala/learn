<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Create extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

	public function index() {

		$stats = $this->tracker_lib->track('create assignment');
		$this->db->insert('tracker', $stats);


		$dashboard_id = hashids_encrypt(time());
		$assignment_id = hashids_encrypt(time() + rand(0,10000));

		if (! empty($_POST)) {
			$instructor =  $_POST['instructor'];
			$course = $_POST['course'];
			$teacher_email = 'test@test.com'; // $_POST['teacher_email'];
			$objective = $_POST['objective'];

			// bundle steps
			$steps = array();
			foreach($_POST as $name => $step) {
				if ($name == 'objective' ||
					$name == 'course' ||
					$name == 'instructor') {
					//$steps[] = $step;
				} else {  $steps[] = $step; }
			}

			// write steps to db
			foreach($steps as $step) {
				$data = compact('dashboard_id', 'assignment_id', 'step');
				$this->Step_model->write_step($data);
			}

			$data = array(
				'time' => time(),
				'dashboard_id' => $dashboard_id,
				'objective' => $objective,
				'steps' => '',
				'teacher_email' => $teacher_email,
				'assignment_id' => $assignment_id,
				'course' => $course,
				'instructor' => $instructor
			);

			// write objective and hash to db
			$this->Objectives_model->update_objective($data);

			$data += array(
				'assignment_url' => 'a url',
				'synopsis_url' => 's url'
			);

			redirect(site_url() . 'dashboard/' . $dashboard_id . '/' . $assignment_id);
		} else {
			$this->load->view('create_view');
		}
	}

	public function begin() {
		$data = array(
			'student_name' => $_POST['student_name'],
			'assignment_id' => $_POST['assignment_id'],
			'synopsis_id' => $_POST['synopsis_id'],
			'timezone' => isset($_COOKIE['timezone']) ? $_COOKIE['timezone'] : 'America/Vancouver'
		);
		$this->Synopsis_model->label_synopsis($data);
		redirect($_POST['synopsis_url']);
	}
}