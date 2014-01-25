<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Synopses extends CI_Controller {

	public function __construct() {
		parent::__construct();
		check_for_admin();
	}

	public function index() {

		$this->db->order_by("id", "desc");
		$query = $this->db->get('synopsis');
		$data = $query->result();

		$view_data = array(
			'user' => $this->session->userdata('user_id'),
			'synopses' => $data
		);
		$this->load->view('synopsis_view', $view_data);
	}
}
