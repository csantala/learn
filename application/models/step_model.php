<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Step_model extends CI_Model {

    public function write_step($step) {
//ds($step,1);
	if ($step['step'] != '') {
		$this->db->insert('steps', $step);
	}
    }

	public function get_steps($assignment_hash) {
	 	$this->db->where('assignment_id', $assignment_hash);
        $query = $this->db->get('steps');
        $data = $query->result();
		if (empty($data)) { return null; }
		else { return $data; }
	}

	public function get_steps_with_notes($assignment_id, $synopsis_id) {

        $this->db->select('*');
        $this->db->where('steps.assignment_id', $assignment_id);
        $this->db->from('note');
        $this->db->join('steps', "note.step_id = steps.id AND note.synopsis_id = '{$synopsis_id}'", 'right');

        $query = $this->db->get();
		$result = $query->result();
	//	ds($result);
        return $result;
	}

	public function update_step($post) {
		$data = array(
			'dashboard_id' => $post['dashboard_id'],
			'step' => $post['step']
		);
		error_log($post['step']);
		$this->db->where('dashboard_id', $post['dashboard_id']);
		$this->db->where('id', $post['step_id']);
		$this->db->update('steps', $data);
	}
}