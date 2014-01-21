<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once('phpass-0.1/PasswordHash.php');

define('PHPASS_HASH_STRENGTH', 8);
define('PHPASS_HASH_PORTABLE', false);

/**
 * SimpleLoginSecure Class
 *
 * Makes authentication simple and secure.
 *
 * Simplelogin expects the following database setup. If you are not using
 * this setup you may need to do some tweaking.
 *
 *
 *   CREATE TABLE `users` (
 *     `user_id` int(10) unsigned NOT NULL auto_increment,
 *     `user_email` varchar(255) NOT NULL default '',
 *     `user_pass` varchar(60) NOT NULL default '',
 *     `user_date` datetime NOT NULL default '0000-00-00 00:00:00' COMMENT 'Creation date',
 *     `user_modified` datetime NOT NULL default '0000-00-00 00:00:00',
 *     `user_last_login` datetime NULL default NULL,
 *     PRIMARY KEY  (`user_id`),
 *     UNIQUE KEY `user_email` (`user_email`),
 *   ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
 *
 * @package   SimpleLoginSecure
 * @version   1.0.1
 * @author    Alex Dunae, Dialect <alex[at]dialect.ca>
 * @copyright Copyright (c) 2008, Alex Dunae
 * @license   http://www.gnu.org/licenses/gpl-3.0.txt
 * @link      http://dialect.ca/code/ci-simple-login-secure/
 */
class SimpleLoginSecure
{
	var $CI;
	var $user_table = 'users';

	/**
	 * Create a user account
	 *
	 * @access	public
	 * @param	string
	 * @param	string
	 * @param	bool
	 * @return	bool
	 */
	function create($user_name, $user_email = '', $user_pass = '', $user_timezone = '', $action = 'create', $auto_login = true)
	{
		$this->CI =& get_instance();
		$this->CI->load->helper('general');

		//Make sure account info was sent
		if($user_email == '' OR $user_pass == '') {
			return false;
		}

		if ($action == 'create') {
			//Check against user table
			$this->CI->db->where('user_email', $user_email);
			$query = $this->CI->db->get_where($this->user_table);

			if ($query->num_rows() > 0) //user_email already exists
			return false;
		}

		//Hash user_pass using phpass
		$hasher = new PasswordHash(PHPASS_HASH_STRENGTH, PHPASS_HASH_PORTABLE);
		$user_pass_hashed = $hasher->HashPassword($user_pass);

		//Insert account into the database
		$data = array(
					'user_name' => $user_name,
					'user_email' => $user_email,
					'user_pass' => $user_pass_hashed,
					'user_date' => time(),
					'user_modified' => time(),
					'user_timezone' => $user_timezone
				);

		if ($action == 'create') {
			$this->CI->db->set($data);
			if(!$this->CI->db->insert($this->user_table)) //There was a problem!
			return false;
		}
		else {
			$this->CI->db->where('user_email', $user_email);
			$this->CI->db->update('users', $data);
		}

		if($auto_login)
			$this->login($user_email, $user_pass);

		return true;
	}

	function cwx98Login($user_email = '', $user_pass = ''){

		# this is the admins special login to a clients account

		$this->CI =& get_instance();

		$this->CI->load->helper('general');

		if($user_email == '' OR $user_pass == '')
			return false;

		# now the admin should be logged in.

		if(intval($this->CI->session->userdata('is_god') == 0)) {
			return false;
		}

		# now we check that the god is logging in with their password
		$this->CI->db->where('user_email', $this->CI->session->userdata('user_email'));
		$query = $this->CI->db->get_where($this->user_table);

		if ($query->num_rows() > 0)
		{
			$god_data = $query->row_array();

			$hasher = new PasswordHash(PHPASS_HASH_STRENGTH, PHPASS_HASH_PORTABLE);

			if(!$hasher->CheckPassword($user_pass, $god_data['user_pass']))
				return false;

			# okay we have a valid god.
			# Now we login as the client

			$this->CI->db->where('user_email', $user_email);
			$query = $this->CI->db->get_where($this->user_table);

			if ($query->num_rows() > 0)
			{
				$user_data = $query->row_array();

				//Destroy old session but first check to see if they were going somewhere before they were asked to login => authorization_backurl
				if($this->CI->session->userdata('authorization_backurl')){
					$authorization_backurl = $this->CI->session->userdata('authorization_backurl');
				}
				$this->CI->session->sess_destroy();

				//Create a fresh, brand new session
				$this->CI->session->sess_create();

				$this->CI->db->simple_query('UPDATE ' . $this->user_table  . ' SET user_last_login = "' . getDTime() . '" WHERE user_id = ' . $user_data['user_id']);

				//Set session data
				unset($user_data['user_pass']);
				$user_data['user'] = $user_data['user_email']; // for compatibility with Simplelogin
				$user_data['logged_in'] = true;

				if($authorization_backurl){
					$user_data['authorization_backurl'] = $authorization_backurl;
				}

				$this->CI->session->set_userdata($user_data);

				return true;
			}
			else
			{
				return false;
			}


		}//end if ($query->num_rows() > 0)

	}

	/**
	 * Login and sets session variables
	 *
	 * @access	public
	 * @param	string
	 * @param	string
	 * @return	bool
	 */
	function login($user_email = '', $user_pass = '')
	{
		$this->CI =& get_instance();

		$this->CI->load->helper('general');

		if($user_email == '' OR $user_pass == '')
			return false;

		//Check if already logged in
		if($this->CI->session->userdata('user_email') == $user_email)
			return true;

		//Check against user table
		$this->CI->db->where('user_email', $user_email);
		$this->CI->db->or_where('user_name', $user_email);
		$query = $this->CI->db->get_where($this->user_table);

		if ($query->num_rows() > 0)
		{
			$user_data = $query->row_array();

			$hasher = new PasswordHash(PHPASS_HASH_STRENGTH, PHPASS_HASH_PORTABLE);

			if(!$hasher->CheckPassword($user_pass, $user_data['user_pass']))
				return false;

			//Destroy old session but first check to see if they were going somewhere before they were asked to login => authorization_backurl
			if($this->CI->session->userdata('authorization_backurl')){
				$authorization_backurl = $this->CI->session->userdata('authorization_backurl');
			}
			$this->CI->session->sess_destroy();

			//Create a fresh, brand new session
			$this->CI->session->sess_create();

			$this->CI->db->simple_query('UPDATE ' . $this->user_table  . ' SET user_last_login = "' . time() . '" WHERE user_id = ' . $user_data['user_id']);

			//Set session data
			unset($user_data['user_pass']);
			$user_data['user'] = $user_data['user_email']; // for compatibility with Simplelogin
			$user_data['logged_in'] = true;

			if(isset($authorization_backurl)){
				$user_data['authorization_backurl'] = $authorization_backurl;
			}

			$this->CI->session->set_userdata($user_data);

			return true;
		}
		else
		{
			return false;
		}

	}

	/**
	 * Logout user
	 *
	 * @access	public
	 * @return	void
	 */
	function logout() {

		$this->CI =& get_instance();

		//Check against user table
		$this->CI->db->where('user_email', $this->CI->session->userdata('user_email'));
		$query = $this->CI->db->get_where($this->user_table);


		if ($query->num_rows() > 0)
		{
			$user_data = $query->row_array();
		}

		unset($user_data);
		$this->CI->session->set_userdata($user_data);

		$this->CI->session->sess_destroy();

	}

	/**
	 * Delete user
	 *
	 * @access	public
	 * @param integer
	 * @return	bool
	 */
	function delete($user_id)
	{
		$this->CI =& get_instance();

		if(!is_numeric($user_id))
			return false;

		return $this->CI->db->delete($this->user_table, array('user_id' => $user_id));
	}

}
?>
