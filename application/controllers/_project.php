<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends CI_Controller {

	public function __construct() {
		parent::__construct();
		check_for_user();
	}

	public function index() {

		// track this
		$stats = $this->tracker_lib->track('project');
		$this->db->insert('tracker', $stats);

		$view_data = array(
			'user' => $this->session->user_data('username'),
			'projects' => $this->Project_model->projects()
		);

		$this->load->view('project_view', $view_data);
	}

	public function new_project() {

		$stats = $this->tracker_lib->track('new project');
		$this->db->insert('tracker', $stats);

		if (! empty($_POST)) {
			$project_id = $this->Project_model->slugify($_POST['title']);
			$this->Project_model->update_project($project_id);
			redirect('/projects');
		}

		$view_data = array(
			'user' => $this->session->userdata('username'),
			'title' => "new project"
		);

		$this->load->view('new_project_view', $view_data);
	}

	public function edit_project($project_id) {
		$project = $this->Project_model->project($project_id);

		if (! empty($_POST)) {
			$this->Project_model->update_project($project_id);
			redirect('/synopses/project/' . $project_id);
		}

		$view_data = array(
			'project' => $project,
			'user' => $this->session->userdata('username')
		);
		$this->load->view('edit_project_view', $view_data);
	}

	public function set_objectives($project_id) {
		$stats = $this->tracker_lib->track('set objectives');
		$this->db->insert('tracker', $stats);

		if (! empty($_POST)) {
			$time = time();

			foreach ($_POST as $objective_id => $objective) {
				if ($objective != '') {
					$data = array(
						'user_id' => $this->session->userdata('user_id'),
						'project_id' => $project_id,
						'id' => $objective_id,
						'time' => time(),
						'objective' => $objective
					);

					$this->Objectives_model->update_objective($data);
				}
			}

			redirect('/synopses/project/' . $project_id);
		}

        $current_objective_id = $this->Objectives_model->get_current_objective_id($project_id, $this->session->userdata('username'));

		$view_data = array(
			'project_id' => $project_id,
			'user' => $this->session->userdata('username'),
			'current_objective_id' => $current_objective_id
		);

		$this->load->view('set_objectives_view', $view_data);
	}

    public function edit_objective() {
        $this->load->view('/components/ajax/edit_objective', $_POST);
    }

    public function update_objective() {
        // update this objective in db
        $data = array(
            'user_id' => $this->session->userdata('user_id'),
            'project_id' => $_POST['project_id'],
            'id' => $_POST['objective_id'],
            'time' => time(),
            'objective' => $_POST['objective']
        );
        $this->Objectives_model->update_objective($data);
        $this->load->view('/components/ajax/updated_objective', $_POST);
    }

    public function delete_objective($project_id, $objective_id) {
        $this->Objectives_model->delete_objective($project_id, $objective_id);
        redirect('/synopses/project/' . $project_id);
    }


	public function new_synopsis($project_id) {

		$stats = $this->tracker_lib->track('new synopsis');
		$this->db->insert('tracker', $stats);

		if (! empty($_POST)) {
			$session = time();
			$this->Synopsis_model->new_synopsis($project_id, $session);

			$data = array(
				'user_id' => $this->session->userdata('user_id'),
				'project_id' => $project_id,
				'position' => 1,
				'session' => $session,
				'time' => $session
			);
			$this->db->insert('task', $data);

			redirect('/synopsis/project/' . $project_id . '/' . $session);
		}

		$view_data = array(
			'project_id' => $project_id,
			'user' => $this->session->userdata('username')
		);

		$this->load->view('new_synopsis_view', $view_data);
	}

        public function new_synopsis_from_objective($project_id, $objective_id) {

        $stats = $this->tracker_lib->track('new synopsis from objective');
        $this->db->insert('tracker', $stats);

        // generate synopsis from objective model
        $synopsis = $this->Objectives_model->get_objective($objective_id);

        $session = time();
        $this->Synopsis_model->new_synopsis($project_id, $session, $synopsis);

        $data = array(
            'user_id' => $this->session->userdata('user_id'),
            'project_id' => $project_id,
            'position' => 1,
            'session' => $session,
            'time' => $session
        );
        $this->Synopsis_model->new_synopsis($project_id, $session, $synopsis);
        $this->db->insert('task', $data);



        redirect('/synopsis/project/' . $project_id . '/' . $session);
    }

	public function delete($project_id) {
		$stats = $this->tracker_lib->track('delete project');
		$this->db->insert('tracker', $stats);
		$this->Project_model->delete_project($project_id);
		$this->index();
	}
}