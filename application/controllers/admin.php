<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		check_for_admin();
	}

	public function index() {

		$stats = $this->tracker_lib->track('admin');
		$this->db->insert('tracker', $stats);

		redirect('/dashboards');
	}


	public function dashboards() {

	    $minis = $this->Task_model->minis();

		$data = array(
			'user' => $this->session->userdata('user_id'),
			'minis' => $minis
		);
		$this->load->view('dashboard_view', $data);
	}

	public function synopses() {

	    $minis = $this->Task_model->minis();

		$data = array(
			'user' => $this->session->userdata('user_id'),
			'minis' => $minis
		);
		$this->load->view('synopses_view', $data);
	}


	public function users() {
		$view_data = array(
			'all_users' => $this->User_model->users(),
			'user' => $this->session->userdata('user_name')
		);
		$this->load->view('admin/admin_users_view', $view_data);
	}
}