<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Comment extends CI_Controller {

		public function __construct() {
			parent::__construct();

			$stats = $this->tracker_lib->track('comment');
			$this->db->insert('tracker', $stats);
		}

		public function add_or_update() {
			$user = $_POST['user'];
			$comment = $_POST['comment'];
			$comments_container_id = $_POST['comments_container_id'];
			$data = array(
				'user' => $user,
				'comments_container_id' => $comments_container_id,
				'comment' => $comment,
				'date' => time()
			);
			$this->Comment_model->add_update_comment($data);
			redirect('/report/' . $comments_container_id);
		}
	}