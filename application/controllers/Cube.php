<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cube extends Frontend_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['subview'] = 'front/cube/cube';
		$this->load->view('front/template', $this->data);
	}

	public function itemByPayment() {
		$this->data['items'] = $this->model_m->itemByPaymentCube();
		$this->data['subview'] = 'front/rollup/itemByPayment';
		$this->load->view('front/template', $this->data);
	}

	public function employeeInvoicesByPayment() {
		$this->data['items'] = $this->model_m->employeeInvoicesByPaymentCube();
		$this->data['subview'] = 'front/rollup/employeeInvoicesByPayment';
		$this->load->view('front/template', $this->data);
	}

	public function itemsQuantityByYearAndChannel() {
		$this->data['items'] = $this->model_m->itemsQuantityByYearAndChannelCube();
		$this->data['subview'] = 'front/rollup/itemsQuantityByYearAndChannel';
		$this->load->view('front/template', $this->data);
	}

	public function itemsByProducersByQuarters() {
		$this->data['items'] = $this->model_m->itemsByProducersByQuartersCube();
		$this->data['subview'] = 'front/rollup/itemsByProducersByQuarters';
		$this->load->view('front/template', $this->data);
	}

	public function invoicesSumByEmployeeByYear() {
		$this->data['items'] = $this->model_m->invoicesSumByEmployeeByYearCube();
		$this->data['subview'] = 'front/rollup/invoicesSumByEmployeeByYear';
		$this->load->view('front/template', $this->data);
	}

}

/* End of file Cube.php */
/* Location: ./application/controllers/Cube.php */