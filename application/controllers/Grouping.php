<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Grouping extends Frontend_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index() {
		$this->data['subview'] = 'front/grouping/grouping';
		$this->load->view('front/template', $this->data);
	}

	public function itemByPayment() {
		$this->data['items'] = $this->model_m->itemByPaymentGrouping();
		$this->data['subview'] = 'front/rollup/itemByPayment';
		$this->load->view('front/template', $this->data);
	}

	public function employeeInvoicesByPayment() {
		$this->data['items'] = $this->model_m->employeeInvoicesByPaymentGrouping();
		$this->data['subview'] = 'front/rollup/employeeInvoicesByPayment';
		$this->load->view('front/template', $this->data);
	}

	public function itemsQuantityByYearAndChannel() {
		$this->data['items'] = $this->model_m->itemsQuantityByYearAndChannelGrouping();
		$this->data['subview'] = 'front/rollup/itemsQuantityByYearAndChannel';
		$this->load->view('front/template', $this->data);
	}

	public function itemsByProducersByQuarters() {
		$this->data['items'] = $this->model_m->itemsByProducersByQuartersGrouping();
		$this->data['subview'] = 'front/rollup/itemsByProducersByQuarters';
		$this->load->view('front/template', $this->data);
	}

	public function invoicesSumByEmployeeByYear() {
		$this->data['items'] = $this->model_m->invoicesSumByEmployeeByYearGrouping();
		$this->data['subview'] = 'front/rollup/invoicesSumByEmployeeByYear';
		$this->load->view('front/template', $this->data);
	}

}

/* End of file Grouping.php */
/* Location: ./application/controllers/Grouping.php */