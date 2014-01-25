<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Synopses_model extends CI_Model {

	public function synopses($project_id) {
		$this->db->where('task.project_id', $project_id);
		$this->db->where('task.user_id', $this->session->userdata('user_id'));
		//$this->db->order_by("task.session", "desc");
		$this->db->from('task');
		$this->db->join('synopsis', 'task.session = synopsis.session');
		$data = $this->db->get();

		$data = $data->result();

		return $data;
	}

	public function delete($session, $project_id) {
		$this->db->where('project_id', $project_id);
		$this->db->where('session', $session);
		$this->db->where('user_id', $this->session->userdata('user_id'));
		$this->db->delete('task');
	}
}