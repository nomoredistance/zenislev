<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
    {
        echo 'dust';
    }

    // my workout log
	public function fit()
    {
        $data = array();
        $data['fh'] = fopen('uploads/workout.csv', 'r');

		$this->load->view('htmlhead');
		$this->load->view('workout', $data);
		$this->load->view('footer');
	}
}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */
