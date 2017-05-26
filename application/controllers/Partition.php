<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Partition extends Frontend_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['subview'] = 'front/partition/partition';
		$this->load->view('front/template', $this->data);
	}

	public function salesPercentageByAll() {
		$this->data['items'] = $this->model_m->salesPercentageByAll();
		$this->data['subview'] = 'front/partition/salesPercentageByAll';
		$this->load->view('front/template', $this->data);
	}

	public function itemByChannelPercent() {
		$this->data['items'] = $this->model_m->itemByChannelPercent();
		$this->data['subview'] = 'front/partition/itemByChannelPercent';
		$this->load->view('front/template', $this->data);
	}

}

/* End of file Partition.php */
/* Location: ./application/controllers/Partition.php */