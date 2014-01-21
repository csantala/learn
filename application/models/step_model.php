<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Step_model extends CI_Model {

    public function write_step($step) {

		$this->db->insert('steps', $step);

    }

	public function get_steps($assignment_hash) {
	 $this->db->where('assignment_id', $assignment_hash);
        $query = $this->db->get('steps');
        $data = $query->result();
		if (empty($data)) { return null; }
		else { return $data; }
	}
}