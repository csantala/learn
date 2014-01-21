<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Objectives_model extends CI_Model {

	public function get_objective($project_id) {
		$this->db->where('project_id', $project_id);
		$data = $this->db->get('objectives');
		$data = $data->result();
		if (empty($data)) { return 'New Objective'; }
		else { return $data[0]->objective; }
	}

	public function get_assignment($assignment_id) {
		$this->db->where('assignment_id', $assignment_id);
		$query = $this->db->get('objectives');
		$data = $query->result();
		if (! empty($data[0])) { return $data[0]; }
		return null;
	}

	public function update_objective($data) {
		$query = $this->db->get_where('objectives', array(
			'dashboard_id' => $data['dashboard_id']
		));

		// update if present, otherwise create a new row if unique ($objective_id)
		if ($query->num_rows() > 0) {
			$this->db->where('dashboard_id', $data['dashboard_id']);
			$this->db->update('objectives', $data);
		} else {
			$this->db->insert('objectives', $data);
		}
	}

    public function get_current_objective_id($project_id, $user_id) {
        $query = $this->db->query("SELECT * FROM objectives ORDER BY id DESC LIMIT 1");
        $data = $query->result();
        return $data[0]->id + 1;
    }


	public function delete_objective($project_id, $objective_id) {
		if (! is_admin()) { $this->db->where('project.user_id', $this->session->userdata('user_id')); }
		$this->db->where('project_id', $project_id);
		$this->db->where('id', $objective_id);
		$this->db->delete('objectives');
	}

}