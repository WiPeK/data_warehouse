<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends Frontend_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['subview'] = 'front/index';
		$this->load->view('front/template', $this->data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */