<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Account extends CI_Controller {

		public function __construct () {
			parent::__construct();
		}

		public function index() {

			$stats = $this->tracker_lib->track('login');
			$this->db->insert('tracker', $stats);

			check_cookie('minis');

			session_start();

			$view_data = array(
				'username' => '',
				'password' => ''
			);

			$this->load->view('login_view', $view_data);
		}

		public function login() {

			$stats = $this->tracker_lib->track('login');
			$this->db->insert('tracker', $stats);

			// redirect home if nothing was posted
			if ($_POST == array()) redirect(site_url());

			$username 	= $this->security->xss_clean($_POST['username']);
			$password	= $this->security->xss_clean($_POST['password']);

			$e = $this->simpleloginsecure->login($username,$password);

			if (!$e) {
				$error = "not found";
				$data = array('error' 		=> $error,
							  'username'  	=> $username,
							  'password'	=> $password,
							  'admin'		=> FALSE
							  );
				$this->load->view('login_view', $data);
			}
			else {
				if (isset($_POST['remember-me'])) {
					$random_string = random_string();
					$cookie = array(
					    'name'   => 'rmt',
					    'value'  => $random_string,
					    'expire' => time() + (10 * 365 * 24 * 60 * 60),
					    'domain' => '.' . $_SERVER['SERVER_NAME'],
					    'path'   => '/'
					);
					set_cookie($cookie);
					$data = array('remember' => $random_string);
					$this->db->where('user_email', $username);
					$this->db->or_where('user_name', $username);
					$this->db->update('users', $data);
				}
				if ($this->session->userdata('user_level') == 'user') show_404();
				if ($this->session->userdata('user_level') == 'administrator') redirect('/admin');
			}
		}

		public function signup() {

			$stats = $this->tracker_lib->track('signup');
			$this->db->insert('tracker', $stats);

			$view_data = array(
				'username' => isset($_POST['username']) ? $_POST['username'] : '',
				'password' => isset($_POST['password']) ? $_POST['password'] : '',
				'password1' => isset($_POST['password1']) ? $_POST['password1'] : '',
				'email' => isset($_POST['email']) ? $_POST['email'] : '',
				'email1' => isset($_POST['email1']) ? $_POST['email1'] : '',
				'timezone' => isset($_POST['timezone']) ? $_POST['timezone'] : ''
			);

			if (! empty($_POST)) {
				if ($this->simpleloginsecure->create($_POST['username'], $_POST['email'], $_POST['password'], $_POST['timezone'], 'create', true)) {
					redirect('/');
				}
			}
			//$view_data += array('error' => 'email exists');

			$this->load->view('signup_view', $view_data);
		}

		public function signoff() {

			$stats = $this->tracker_lib->track('signoff');
			$this->db->insert('tracker', $stats);

			$this->session->unset_userdata('user_email');
			$this->session->unset_userdata('user_level');
			delete_cookie("rmt", '.' . $_SERVER['SERVER_NAME']);
			redirect(site_url());
		}

	}