<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Synopsis_model extends CI_Model {

	public function scanner($assignment_id) {
		$this->db->where('assignment_id', $assignment_id);
		$query = $this->db->get('synopsis');
		$data = $query->result();
		return $data;
	}

	public function synopsis($project_id) {
		$this->db->where('project_id', $project_id);
	//	$this->db->where('user_id', $this->session->userdata('user_id'));
	//	$this->db->where('session', $session);
		$this->db->order_by("position", "asc");
		$data = $this->db->get('task');

		$data = $data->result();

		return $data;
	}

	public function synopsis2($project_id) {
		$this->db->select('task.id, task.project_id, task.time, task.position, task.task, comments.comment');
		$this->db->where('project_id', $project_id);
		$this->db->join('comments', 'comments.task_id = task.id', 'left');
		$this->db->order_by("position", "asc");
		$data = $this->db->get('task');

		$data = $data->result();

		return $data;
	}

	public function update_synopsis() {
		$data = array(
			'synopsis_id' => $_POST['project_id'],
			'assignment_id' => $_POST['assignment_id'],
		);

		$query = $this->db->get_where('synopsis', $data);

		$data += array('elapsed_time' => $_POST['elapsed_time']);

		// update if present, otherwise create a new row if unique ($task_id)
		if ($query->num_rows() > 0) {
			$this->db->where('synopsis_id', $_POST['project_id']);
			$this->db->where('assignment_id', $_POST['assignment_id']);
			$this->db->update('synopsis', $data);
		} else {
			$this->db->insert('synopsis', $data);
		}
	}

	public function label_synopsis($data) {
		$this->db->insert('synopsis', $data);
	}

	public function get_student($synopsis_id) {
		$this->db->where('synopsis_id', $synopsis_id);
		$query = $this->db->get('synopsis');
		$data = $query->result();
		if (empty($data)) { show_404(); }
		return $data[0];
	}

	public function new_synopsis($project_id, $session, $synopsis = null) {
		$data = array(
			'user_id' => $this->session->userdata('user_id'),
			'project_id' => $project_id,
			'objective' => isset($synopsis) ? $synopsis : $_POST['synopsis'],
			'session' => $session
		);
		$this->db->insert('synopsis', $data);
	}

	public function get_objective($project_id, $session, $user_id) {
		$data = array(
			'project_id' => $project_id,
			'session' => $session,
			'user_id' => $user_id
		);
		$this->db->where('project_id', $project_id);
		$this->db->where('session', $session);
		$this->db->where('user_id', $user_id);
		$data = $this->db->get('synopsis');
		$data = $data->result();

		return $data[0];
	}

	public function update_synopsis_for_report($data) {
		extract($data);
		$data = array(
			'synopsis_id' => $synopsis_id,
			'status' => $status,
			'report_url' => $report_url
		);
		$this->db->where('synopsis_id', $synopsis_id);
		$query = $this->db->update('synopsis', $data);
	}

	public function update_seconds() {
		$this->db->where('user_id', $this->session->userdata('user_id'));
		$this->db->where('project_id', $_POST['project_id']);
		$this->db->where('session', $_POST['session']);
		$this->db->set('duration', 'duration+' . $_POST['seconds'], FALSE);
		$this->db->update('synopsis');
	}

	public function write_mark($data) {
		$params = array(
			'assignment_id' => $data['assignment_id'],
			'synopsis_id' => $data['synopsis_id']
		);

		$query = $this->db->get_where('synopsis',$params);

		// update if present, otherwise create a new row if unique ($objective_id)
		if ($query->num_rows() > 0) {
			$this->db->where($params);
			$this->db->update('synopsis', $data);
		} else {
			$this->db->insert('synopsis', $data);
		}
	}

	public function get_mark($data) {
        $this->db->where($data);
        $query = $this->db->get('synopsis');
        $data = $query->result();
		if (empty($data)) { return null; }
		else { return $data[0]; }

	}

}