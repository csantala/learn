<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Tracker extends CI_Controller {

		public function __construct() {
			parent::__construct();
			check_for_admin();
		}

		public function index() {
			$this->activity();
		}

		public function activity() {

			$per_page = 40;

			$config = array();
		    $config["base_url"] = base_url() . "/themes/all";
		    $config["uri_segment"] = 3;


			$config['base_url'] = site_url().'tracker/activity';
			$config['total_rows'] = $this->Tracker_model->count_entries();
			$config['per_page'] = $per_page;
			$config['uri_segment'] = '3';

			$this->pagination->initialize($config);

			$pagination = $this->pagination->create_links();

			$this->load->model('tracker_model');

					$header_data = array('title' => 'Tracker');
					$stats = $this->tracker_model->get_entries($per_page, (int) $this->uri->segment(3));

					$view_data = array(
						'user' => $this->session->userdata('user_email'),
						'stats' => $stats,
						'pagination' => $pagination,
						'admin' => $this->session->userdata('user_name'),
					//	'rand_quote' => $this->quotes->randomQuote()
					);
					$this->load->view('tracker_view', $view_data);

		}
	}