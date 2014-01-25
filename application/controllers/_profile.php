<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct() {
		parent::__construct();
		check_for_user();
	}

	public function index() {

		$stats = $this->tracker_lib->track('profile');
		$this->db->insert('tracker', $stats);

		$view_data = array(
			'projects' => $this->Project_model->projects(),
			'user' => $this->session->userdata('user_name')
		);
		$this->load->view('dashboard_view', $view_data);
	}
}