<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project_model extends CI_Model {

	public function projects() {
		if (! is_admin()) { $this->db->where('user_id', $this->session->userdata('user_id')); }
		$data = $this->db->get('project');
		$data = $data->result();
		return $data;
	}

	public function project($project_id, $admin = false) {
		if (! is_admin()) { $this->db->where('user_id', $this->session->userdata('user_id')); }
		$this->db->where('project_id', $project_id);
		$data = $this->db->get('project');
		$data = $data->result();
		return $data[0];
	}

	public function project_meta($admin = false) {
		if (! is_admin()) { $this->db->where('project.user_id', $this->session->userdata('user_id')); }
		$this->db->join('project', 'task.project_id = project.project_id');
		$this->db->order_by("task.time", "asc");
//		$this->db->group_by('task.project_id');
		$data = $this->db->get('task');

		$data = $data->result();

		return $data;
	}

	public function update_project($project_id) {
		$project = array(
			'project_id' => $project_id,
			'user_id' => $this->session->userdata('user_id'),
			'title' => $_POST['title'],
			'description' => $_POST['description'],
			'github_link' => $_POST['github_link'],
			'local_link' => $_POST['local_link'],
			'staging_link' => $_POST['staging_link'],
			'production_link' => $_POST['production_link'],
		);

		$query = $this->db->get_where('project', array('project_id' => $project_id));

		// update if present, otherwise create a new row if unique ($task_id)
		if ($query->num_rows() > 0) {
			$this->db->where('project_id', $project_id);
			$this->db->where('user_id', $this->session->userdata('user_id'));
			$this->db->update('project', $project);
		} else {
			$data = array(
		//		'id' => null,
				'date' => time(),
				'project_id' => $project_id,
				'user_id' => $this->session->userdata('user_id'),
				'title' => $_POST['title']
			);

			$this->db->insert('project', $data);
		}
	}

	public function delete_project($project_id) {
		if (! is_admin()) { $this->db->where('project.user_id', $this->session->userdata('user_id')); }
		$this->db->where('project_id', $project_id);
		$this->db->delete('project');
		$this->db->where('project_id', $project_id);
		$this->db->delete('task');
	}

    public function project_title($project_id) {
        $this->db->where('project_id', $project_id);
        $query = $this->db->get('project');
        $data = $query->result();
        return $data[0]->title;
    }

	public function slugify($title = '') {
		$project_id = strtolower($title);
		if ($title == '') {
			$title = 'project';
		}
		$base_title = $title;
		$i = 0;
		$params = array(
			'title' => $title
		);
		while ($this->db->where($params)->get('project')->num_rows()) {
			if ($i != 0) {
				$title = "{$base_title}-{$i}";
			}
			$params['title'] = $title;
			$i++;
		}

		$title = str_replace(' ', '_', $title);
		return $title;
	}
}