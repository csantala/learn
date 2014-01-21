<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	public function users() {
		$data = $this->db->get('users');
		$data = $data->result();
		return $data;
	}

}