<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Note_model extends CI_Model {

	public function get_notes($assignment_id, $synopsis_id) {
		$this->db->where('assignment_id', $assignment_id);
		$this->db->where('synopsis_id', $synopsis_id);
		$query = $this->db->get('note');
		$data = $query->result();
		if (! empty($data[0])) { return $data[0]; }
		return array();

	}

	public function write_note($data) {
		$query = $this->db->get_where('note', array(
			'step_id' => $data['step_id'],
			'assignment_id' => $data['assignment_id'],
			'synopsis_id' => $data['synopsis_id']
		));

		// update if present, otherwise create a new row if unique ($objective_id)
		if ($query->num_rows() > 0) {
			$this->db->where('step_id', $data['step_id']);
			$this->db->where('assignment_id', $data['assignment_id']);
			$this->db->where('synopsis_id', $data['synopsis_id']);
			$this->db->update('note', $data);
		} else {
			$this->db->insert('note', $data);
		}
	}

	public function update_notes($post) {
		foreach ($post as $name => $note) {
			if (is_int($name)) {
				$data = array(
					'assignment_id' => $post['aid'],
					'synopsis_id' => $post['pid'],
					'step_id' => $name,
					'note' => $note
				);
				$this->db->update('note', $data);
			}
		}
	}
}