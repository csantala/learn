<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report_model extends CI_Model {

    public function create_report($data) {
    	extract($data);

		$data = array(
			'project_id' => $project_id,
			'elapsed_time' => $elapsed_time,
			'timezone' => $timezone,
			'hash' => $project_id,
			'assignment_hash' => $asshash,
			'student_name' => $student_name
		);

	    $query = $this->db->get_where('report', array(
			'project_id' => $project_id,
			'hash' => $project_id
		));

		if ($query->num_rows() > 0) {
			$this->db->where('project_id',  $project_id);
			$this->db->update('report', $data);
		} else {
			$this->db->insert('report', $data);
		}
    }

	public function name_report($hash, $name) {
		$this->db->where('hash', $hash);
		$data = array('student_name' => $name);
		$this->db->update('report', $data);
	}

    public function retrieve_report($hash) {
        $this->db->where('hash', $hash);
        $query = $this->db->get('report');
        $data = $query->result();
		if (empty($data)) { return null; }
		else { return $data[0]; }
    }
}