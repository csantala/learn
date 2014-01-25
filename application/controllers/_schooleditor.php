<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Schooleditor extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $stats = $this->tracker_lib->track('new synopsis');
        $this->db->insert('tracker', $stats);

 		$hash = time();
		$session = time();

        // save new hash to db
        $project_id = $hash;

        $data = array(
            'project_id' => $project_id,
            'position' => 1,
            'session' => $session,
            'time' => time()
        );

      //  $this->db->insert('task', $data);

      	$rows = $this->Task_model->tasks('snopz.com', '42');

		// send hash to root
        if (empty($rows)) { die('not found'); }
        $view_data = array(
            'objective' => 'test',
            'date' => $rows[0]->time,
            'project_id' => $project_id,
            'session' => $session,
            'rows' => $rows
        );

        $this->db->insert('task', $data);

		redirect(site_url() . $hash);

       // $this->load->view('editor_view', $view_data);
    }
}