<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wedding extends CI_Controller {

	public function index()
    {
		$this->load->view('htmlhead');
		$this->load->view('wedding');
		$this->load->view('footer');
	}

}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */

