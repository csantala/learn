<?php

	class Tracker_model extends CI_Model {

		var $time   	= '';
		var $referer 	= '';
		var $page    	= '';
		var $browser 	= '';
		var $os		 	= '';
		var $ip			= '';

		function tracker_model() {
		//	parent::CI_Model();
		}

		function count_entries() {
			return $this->db->count_all_results('tracker');
		}

		function get_entries($limit = NULL, $offset = NULL) {
			$this->db->order_by("id", "desc");
			$query = $this->db->get('tracker', $limit, $offset);
			return $query->result();
		 }

		function insert_entry() {
			$this->title   = $data['time'];
			$this->db->insert('entries', $this);
		}

		function track_file($created_time) {
			$fullQuery = "UPDATE file_access SET accessed=accessed+1 WHERE created_time = '$created_time'";
    		$query = $this->db->query( $fullQuery );
		}

		function accessed($time) {
			$this->db->select('accessed');
			$query = $this->db->get_where('file_access', array('created_time' => $time));
			$data = $query->result();// dump($data,1);
			if ($data) return $data[0]->accessed;
			else return 0;
		}
	}