<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
		$this->load->library('typography');

		$objective = '';

		$assignment_id = $this->uri->segment(2);
		$synopsis_id = $this->uri->segment(3);
		$dashboard_id = $this->uri->segment(4);

        if ($assignment_id) {
			$assignment = $this->Objectives_model->get_assignment($assignment_id);
			// verify dashboard id
			if ($dashboard_id == $assignment->dashboard_id) { $is_instructor = true; } else { $is_instructor = false; }
			if ($assignment == '') { show_404(); }
			$student_meta = $this->Synopsis_model->get_student($synopsis_id);

			$steps = $this->Step_model->get_steps_with_notes($assignment_id, $synopsis_id);
			// get synopsis for steps
			$rows = array();
			foreach ($steps as $step) {
				$rows[] = $this->Task_model->tasks($assignment_id,$step->id, $synopsis_id);
			}

			// get marked meta if any
			$data = compact('assignment_id', 'synopsis_id');
			$marked_meta = $this->Synopsis_model->get_mark($data);

           	$view_data = array(
           		'rows' => $rows,
           		'marked_meta' => $marked_meta,
           		'is_instructor' => $is_instructor,
           		'dashboard_id' => $dashboard_id,
           		'course' => $assignment->course,
				'instructor' => $assignment->instructor,
                'objective' => $assignment->objective,
                'assignment_id' => $assignment_id,
                'assignment_hash' => $assignment_id,
                'steps' => $steps,
                'date' => time(), //$rows[0]->time,
                'synopsis_id' => $synopsis_id,
                'assignment_hash' => $assignment_id,
                'session' => null,
                'project_id' => $assignment_id,
                'timezone' => $student_meta->timezone,
                'student_name' => $student_meta->student_name
            );
            //$this->load->view('editor_view', $view_data);
            $this->load->view('worksheet_view', $view_data);
        } else {
			show_404();
        	// TODO: generate proper id
            $assignment_id = time();
			$view_data = array(
				'assignment_id' => $assignment_id,
				'objective' => $objective
			);
            $this->load->view('home_view', $view_data);
        }
    }

	public function write_note() {
		$this->Note_model->write_note($_POST);
	}

    public function edit_objective() {
        $this->load->view('/components/ajax/edit_objective', $_POST);
    }

    public function update_objective() {
        // update this objective in db
        $data = array(
            'project_id' => $_POST['project_id'],
            'objective' => $_POST['objective']
        );
        $this->Objectives_model->update_objective($data);
        $this->load->view('/components/ajax/updated_objective', $_POST);
    }

	// synopsis editor ajax
	public function load_editor() {
    	$rows = $this->Task_model->tasks($_POST['assignment_id'],$_POST['step_id'],$_POST['synopsis_id']);
		// create new synopses if !$rows
		if (empty($rows)) {
       	    $rows[] = (object)array(
                'step_id' => $_POST['step_id'],
                'assignment_id' => $_POST['assignment_id'],
                'synopsis_id' => $_POST['synopsis_id'],
                'position' => 1,
                'session' => time(),
                'time' => time(),
                'task' => ''
            );
		}

		$view_vars = array(
			'assignment_id' => $_POST['assignment_id'],
			'synopsis_id' => $_POST['synopsis_id'],
			'step_id' => $_POST['step_id'],
			'rows' => $rows,
            'timezone' => $_POST['timezone']
		);

		$this->load->view('/components/ajax/synopsis_editor', $view_vars);
	}
}