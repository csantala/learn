<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Task_model extends CI_Model {

	public function minis(){
		$this->db->group_by('assignment_id');
		$this->db->order_by('id', 'desc');
		$data = $this->db->get('task');
		return $data->result();
	}

	public function tasks($assignment_id, $step_id, $synopsis_id) {
		$this->db->where('assignment_id', $assignment_id);
		$this->db->where('step_id', $step_id);
		$this->db->where('synopsis_id', $synopsis_id);
	//	$this->db->where('session', $session);
		$this->db->order_by("position", "asc");
		$data = $this->db->get('task');

		$data = $data->result();

		return $data;
	}

	public function insert_task() {
		$data = array(
			'assignment_id' => $_POST['assignment_id'],
			'synopsis_id' => $_POST['synopsis_id'],
			'step_id' => $_POST['step_id'],
			'session' => $_POST['session'],
			'time' => $_POST['time'],
			'position' => $_POST['position'],
			'task' => $_POST['task']
		);
		// update all child positions from this task
		$this->db->where('position >=', $_POST['position']);
		$this->db->where('assignment_id', $_POST['assignment_id']);
		$this->db->where('step_id', $_POST['step_id']);
		$this->db->where('synopsis_id', $_POST['synopsis_id']);
		$this->db->where('session', $_POST['session']);
		$this->db->set('position', 'position+1', FALSE);
		$this->db->update('task');
		// insert this task
		$this->db->insert('task', $data);
	}

	public function update_task() {
		$query = $this->db->get_where('task', array(
			'session' => $_POST['session'],
			'assignment_id' => $_POST['assignment_id'],
			'position' => $_POST['position'],
			'step_id' => $_POST['step_id'],
			'synopsis_id' => $_POST['synopsis_id']
		));
		// update if present, otherwise create a new row if unique ($task_id)
		if ($query->num_rows() > 0) {
			$data = array(
				'position' => $_POST['position'],
				'session' => $_POST['session'],
				'task' => $_POST['task']
			);
			$this->db->where('position', $_POST['position']);
			$this->db->where('session', $_POST['session']);
			$this->db->where('assignment_id', $_POST['assignment_id']);
			$this->db->where('step_id', $_POST['step_id']);
			$this->db->where('synopsis_id', $_POST['synopsis_id']);
			$this->db->update('task', $data);
		} else {
			$data = array(
				'assignment_id' => $_POST['assignment_id'],
				'synopsis_id' => $_POST['synopsis_id'],
				'step_id' => $_POST['step_id'],
				'session' => $_POST['session'],
				'time' => $_POST['time'],
				'position' => $_POST['position'],
				'task' => $_POST['task']
			);
			$this->db->insert('task', $data);
		}
	}

	public function delete_task() {
		$this->db->where('assignment_id', $_POST['assignment_id']);
		$this->db->where('session', $_POST['session']);
		$this->db->where('position', $_POST['position']);
		$this->db->delete('task');
		// update all child positions from this task
		$this->db->where('position >=', $_POST['position']);
		$this->db->where('assignment_id', $_POST['assignment_id']);
		$this->db->where('session', $_POST['session']);
		$this->db->set('position', 'position-1', FALSE);
		$this->db->update('task');
	}
}