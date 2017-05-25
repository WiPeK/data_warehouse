<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rank extends Frontend_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['subview'] = 'front/rank/rank';
		$this->load->view('front/template', $this->data);
	}

	public function rankBySales() {
		$this->data['items'] = $this->model_m->rankBySales();
		$this->data['subview'] = 'front/rank/rankBySales';
		$this->load->view('front/template', $this->data);
	}

	public function rankByCategory() {
		$this->data['items'] = $this->model_m->rankByCategory();
		$this->data['subview'] = 'front/rank/rankByCategory';
		$this->load->view('front/template', $this->data);
	}

	public function rankByDay() {
		$this->data['items'] = $this->model_m->rankByDay();
//todo naprawic
		$this->data['subview'] = 'front/rank/rankByDay';
		$this->load->view('front/template', $this->data);
	}

	public function rankByMonth() {
		$this->data['items'] = $this->model_m->rankByMonth();
		$this->data['subview'] = 'front/rank/rankByMonth';
		$this->load->view('front/template', $this->data);
	}

}

/* End of file Rank.php */
/* Location: ./application/controllers/Rank.php */