<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Task_model extends CI_Model {

	public function minis(){
		$this->db->group_by('project_id');
		$this->db->order_by('id', 'desc');
		$data = $this->db->get('task');
		return $data->result();
	}

	public function tasks($project_id) {
		$this->db->where('project_id', $project_id);
	//	$this->db->where('session', $session);
		$this->db->order_by("position", "asc");
		$data = $this->db->get('task');

		$data = $data->result();

		return $data;
	}

	public function insert_task() {
		$data = array(
			'project_id' => $_POST['assignment_id'],
			'session' => $_POST['session'],
			'time' => $_POST['time'],
			'position' => $_POST['position'],
			'task' => $_POST['task']
		);
		// update all child positions from this task
		$this->db->where('position >=', $_POST['position']);
		$this->db->where('project_id', $_POST['project_id']);
		$this->db->where('session', $_POST['session']);
		$this->db->set('position', 'position+1', FALSE);
		$this->db->update('task');
		// insert this task
		$this->db->insert('task', $data);
	}

	public function update_task() {
		$query = $this->db->get_where('task', array(
			'session' => $_POST['session'],
			'project_id' => $_POST['project_id'],
			'position' => $_POST['position']
		));
		// update if present, otherwise create a new row if unique ($task_id)
		if ($query->num_rows() > 0) {
			$data = array(
				'project_id' => $_POST['project_id'],
				'position' => $_POST['position'],
				'session' => $_POST['session'],
				'task' => $_POST['task']
			);
			$this->db->where('position', $_POST['position']);
			$this->db->where('session', $_POST['session']);
			$this->db->where('project_id', $_POST['project_id']);
			$this->db->update('task', $data);
		} else {
			$data = array(
				'project_id' => $_POST['project_id'],
				'session' => $_POST['session'],
				'time' => $_POST['time'],
				'position' => $_POST['position'],
				'task' => $_POST['task']
			);
			$this->db->insert('task', $data);
		}
	}

	public function delete_task() {
		$this->db->where('project_id', $_POST['project_id']);
		$this->db->where('session', $_POST['session']);
		$this->db->where('position', $_POST['position']);
		$this->db->delete('task');
		// update all child positions from this task
		$this->db->where('position >=', $_POST['position']);
		$this->db->where('project_id', $_POST['project_id']);
		$this->db->where('session', $_POST['session']);
		$this->db->set('position', 'position-1', FALSE);
		$this->db->update('task');
	}
}