<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Synopsis extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$stats = $this->tracker_lib->track('synopsis');
		$this->db->insert('tracker', $stats);
	}

	public function index() {
		show_404();
	}

	public function task() {
		$this->Synopsis_model->update_synopsis();
		$this->Task_model->update_task();
	}

	public function insert_task() {
		$this->Task_model->insert_task();
	}

	public function update_task() {
		$this->Task_model->update_task();
	}

	public function delete_task() {
		$this->Task_model->delete_task();
		$this->index();
	}

	public function project($project_id, $session) {
		$objective = $this->Synopsis_model->get_objective($project_id, $session, $this->session->userdata('user_id'));
		// get alls tasks in this synopsis
		$rows = $this->Task_model->tasks($project_id, $session);
		if (empty($rows)) { die('not found'); }
		$view_data = array(
			'objective' => $objective->objective,
			'user' => $this->session->userdata('username'),
			'date' => $rows[0]->time,
			'user_id' => $this->session->userdata('user_id'),
			'project_id' => $project_id,
			'session' => $session,
			'rows' => $rows
		);
		$this->load->view('synopsis_view', $view_data);
	}

	public function new_synopsis($project_id) {
		$stats = $this->tracker_lib->track('new synopsis');
		$this->db->insert('tracker', $stats);

		$data = array(
			'user_id' => $this->session->userdata('user_id'),
			'project_id' => $project_id,
			'position' => 1,
			'session' => time(),
			'time' => time()
		);

		$this->db->insert('task', $data);
		redirect('/synopsis/project/' . $project_id . '/' . time());
	}
}