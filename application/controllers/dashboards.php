<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Dashboards extends CI_Controller {

		public function __construct() {
			parent::__construct();
			check_for_admin();
		}

		public function index() {

			$this->db->order_by("objectives.id", "desc");
			$query = $this->db->get('objectives');
			$data = $query->result();

			$view_data = array(
				'user' => $this->session->userdata('user_id'),
				'dashboards' => $data
			);
			$this->load->view('dashboards_view', $view_data);
		}
	}