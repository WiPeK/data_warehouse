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

	public function resultQuery() {
		if(isset($_POST["submit"])) {
			$this->data['items'] = $this->model_m->resultQuery();
			$this->data['subview'] = 'front/result';
			$this->load->view('front/template', $this->data);
		} else {
			redirect(site_url());
		}
	}

	public function combinedQuery() {
		if(isset($_POST["submit"])) {
			$this->data['items'] = $this->model_m->combinedQuery();
			$this->data['subview'] = 'front/result';
			$this->load->view('front/template', $this->data);
		} else {
			redirect(site_url());
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */