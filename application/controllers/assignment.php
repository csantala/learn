<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Assignment extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

	public function index() {

		$stats = $this->tracker_lib->track('assignment');
		$this->db->insert('tracker', $stats);

		if($this->uri->segment(2)) {
			$assignment_id = $this->uri->segment(2);
			$assignment = $this->Objectives_model->get_assignment($assignment_id);
			if ($assignment == '') { show_404(); }
			$synopsis_id = hashids_encrypt(time() + rand(1,10000));

			$view_data = array(
				'objective' => $assignment->objective,
				'steps' => $this->Step_model->get_steps($assignment_id),
				'assignment_id' => $assignment_id,
				'synopsis_id' => $synopsis_id,
				'synopsis_url' => site_url() . 'home/' . $assignment_id . '/' . $synopsis_id,
				'assignment_url' => site_url() . 'assignment/' . $assignment_id
			);
		 	$this->load->view('assignment_view', $view_data);
		} else { show_404(); }
	}
}