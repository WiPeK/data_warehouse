<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rollup extends Frontend_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['items'] = $this->model_m->getRollup();
		$this->data['subview'] = 'front/rollup/rollup';
		$this->load->view('front/template', $this->data);
	}

	public function itemByPayment() {
		$this->data['items'] = $this->model_m->itemByPaymentRollUp();
		$this->data['subview'] = 'front/rollup/itemByPayment';
		$this->load->view('front/template', $this->data);
	}

	public function employeeInvoicesByPayment() {
		$this->data['items'] = $this->model_m->employeeInvoicesByPaymentRollUp();
		$this->data['subview'] = 'front/rollup/employeeInvoicesByPayment';
		$this->load->view('front/template', $this->data);
	}

	public function itemsQuantityByYearAndChannel() {
		$this->data['items'] = $this->model_m->itemsQuantityByYearAndChannelRollUp();
		$this->data['subview'] = 'front/rollup/itemsQuantityByYearAndChannel';
		$this->load->view('front/template', $this->data);
	}

	public function itemsByProducersByQuarters() {
		$this->data['items'] = $this->model_m->itemsByProducersByQuartersRollUp();
		$this->data['subview'] = 'front/rollup/itemsByProducersByQuarters';
		$this->load->view('front/template', $this->data);
	}

	public function invoicesSumByEmployeeByYear() {
		$this->data['items'] = $this->model_m->invoicesSumByEmployeeByYearRollUp();
		$this->data['subview'] = 'front/rollup/invoicesSumByEmployeeByYear';
		$this->load->view('front/template', $this->data);
	}
}

/* End of file Rollup.php */
/* Location: ./application/controllers/Rollup.php */