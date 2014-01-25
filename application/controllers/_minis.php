<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Minis extends CI_Controller {

		public function __construct() {
			parent::__construct();
			check_for_admin();
		}

		public function index() {

		    $minis = $this->Task_model->minis();

			$data = array(
				'user' => $this->session->userdata('user_id'),
				'minis' => $minis
			);
			$this->load->view('minis_view', $data);
		}
	}