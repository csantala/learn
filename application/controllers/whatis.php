<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Whatis extends CI_Controller {

		public function __construct () {
			parent::__construct();
			$stats = $this->tracker_lib->track('WhatIs');
			$this->db->insert('tracker', $stats);
		}

		public function index() {
			$this->load->view('whatis_view');
		}
	}