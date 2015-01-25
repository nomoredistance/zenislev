<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
    {
        echo 'dust';
    }

    // my food log
	public function food()
    {
        $data = array();
        $data['fh'] = fopen('uploads/food.csv', 'r');
        $data['page_title'] = 'Food Log';

		$this->load->view('htmlhead');
		$this->load->view('table_simple', $data);
		$this->load->view('footer');
	}

    // my workout log
	public function fit()
    {
        $data = array();
        $data['fh'] = fopen('uploads/workout.csv', 'r');
        $data['page_title'] = 'Workout Log';

		$this->load->view('htmlhead');
		$this->load->view('table_simple', $data);
		$this->load->view('footer');
	}
}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */
