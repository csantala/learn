<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment_model extends CI_Model {

	public function add_update_comment($data) {

		$query = $this->db->get_where('comments', array(
			'comments_container_id' => $data['comments_container_id']
		));

		// create a new branch if present, otherwise create a new row if unique ($comments_container_id)
		$rows = $query->num_rows();
		if ($rows > 0) {
			$data['branch'] = $rows;
			$this->db->insert('comments', $data);
		} else {
			$this->db->insert('comments', $data);
		}
	}

	public function get_comments($comments_container_id) {
		$this->db->where('comments_container_id', $comments_container_id);
		$query = $this->db->get('comments');
		$data = $query->result();
		if (! empty($data)) { return $data; }
		return null;
	}
}