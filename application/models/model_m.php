<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_m extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function getRollup()
	{
		return $this->db->query("SELECT PAYMENT.TYPE, PRODUCT.NAME, SUM(QUANTITY) FROM SALES JOIN PAYMENT ON SALES.ID_PAYMENT = PAYMENT.ID_PAYMENT JOIN PRODUCT ON SALES.ID_PRODUCT = PRODUCT.ID_PRODUCT GROUP BY ROLLUP(PAYMENT.TYPE, PRODUCT.NAME)
		")->result();
	}

	public function itemByPaymentRollUp() {
		return $this->db->query("SELECT PAYMENT.TYPE, PRODUCT.NAME, SUM(QUANTITY) AS ILOSC FROM SALES JOIN PAYMENT ON SALES.ID_PAYMENT = PAYMENT.ID_PAYMENT JOIN PRODUCT ON SALES.ID_PRODUCT = PRODUCT.ID_PRODUCT GROUP BY ROLLUP(PAYMENT.TYPE, PRODUCT.NAME)")
			->result();
	}

	public function employeeInvoicesByPaymentRollUp() {
		return $this->db->query("SELECT EMPLOYEES.NAME || ' ' || EMPLOYEES.SURNAME AS PRACOWNIK, PAYMENT.TYPE, COUNT(SALES.ID_PAYMENT) as ILOSC FROM SALES JOIN EMPLOYEES ON SALES.ID_EMPLOYEES = EMPLOYEES.ID_EMPLOYEES JOIN PAYMENT ON SALES.ID_PAYMENT = PAYMENT.ID_PAYMENT GROUP BY ROLLUP(EMPLOYEES.NAME || ' ' || EMPLOYEES.SURNAME, PAYMENT.TYPE)")
			->result();
	}

	public function itemsQuantityByYearAndChannelRollUp() {
		return $this->db->query("SELECT PRODUCT.NAME, CHANNEL.TYPE, YEAR.YEAR, SUM(SALES.QUANTITY) AS ILOSC FROM SALES JOIN PRODUCT ON SALES.ID_PRODUCT = PRODUCT.ID_PRODUCT JOIN DATA ON SALES.ID_DATA = DATA.ID_DATA JOIN YEAR ON DATA.ID_YEAR = YEAR.ID_YEAR JOIN CHANNEL ON SALES.ID_CHANNEL = CHANNEL.ID_CHANNEL GROUP BY ROLLUP(PRODUCT.NAME, CHANNEL.TYPE, YEAR.YEAR)")
			->result();
	}

	public function itemsByProducersByQuartersRollUp() {
		return $this->db->query("SELECT PRODUCER.NAME, QUARTER.NUM_OF_Q, YEAR.YEAR, SUM(SALES.QUANTITY) AS ILOSC FROM SALES JOIN PRODUCT ON SALES.ID_PRODUCT = PRODUCT.ID_PRODUCT JOIN PRODUCER ON PRODUCT.ID_PRODUCER = PRODUCER.ID_PRODUCER JOIN DATA ON SALES.ID_DATA = DATA.ID_DATA JOIN QUARTER ON DATA.ID_QUARTER = QUARTER.ID_QUARTER JOIN YEAR ON DATA.ID_YEAR = YEAR.ID_YEAR GROUP BY ROLLUP(PRODUCER.NAME, QUARTER.NUM_OF_Q, YEAR.YEAR)")
			->result();
	}

	public function invoicesSumByEmployeeByYearRollUp() {
		return $this->db->query("SELECT PRODUCT.NAME, EMPLOYEES.NAME || ' ' || EMPLOYEES.SURNAME AS PRACOWNIK, YEAR.YEAR, SUM(INVOICE.RESULT_PRICE) AS ILOSC FROM SALES JOIN PRODUCT ON SALES.ID_PRODUCT = PRODUCT.ID_PRODUCT JOIN EMPLOYEES ON SALES.ID_EMPLOYEES = EMPLOYEES.ID_EMPLOYEES JOIN DATA ON SALES.ID_DATA = DATA.ID_DATA JOIN YEAR ON DATA.ID_YEAR = YEAR.ID_YEAR JOIN INVOICE ON SALES.ID_INVOICE = INVOICE.ID_INVOICE WHERE ROWNUM < 10000 GROUP BY ROLLUP(PRODUCT.NAME, EMPLOYEES.NAME || ' ' || EMPLOYEES.SURNAME, YEAR.YEAR)")
					->result();
	}

	public function itemByPaymentCube() {
		return $this->db->query("SELECT PAYMENT.TYPE, PRODUCT.NAME, SUM(QUANTITY) AS ILOSC FROM SALES JOIN PAYMENT ON SALES.ID_PAYMENT = PAYMENT.ID_PAYMENT JOIN PRODUCT ON SALES.ID_PRODUCT = PRODUCT.ID_PRODUCT GROUP BY CUBE(PAYMENT.TYPE, PRODUCT.NAME)")
			->result();
	}

	public function employeeInvoicesByPaymentCube() {
		return $this->db->query("SELECT EMPLOYEES.NAME || ' ' || EMPLOYEES.SURNAME AS PRACOWNIK, PAYMENT.TYPE, COUNT(SALES.ID_PAYMENT) as ILOSC FROM SALES JOIN EMPLOYEES ON SALES.ID_EMPLOYEES = EMPLOYEES.ID_EMPLOYEES JOIN PAYMENT ON SALES.ID_PAYMENT = PAYMENT.ID_PAYMENT GROUP BY CUBE(EMPLOYEES.NAME || ' ' || EMPLOYEES.SURNAME, PAYMENT.TYPE)")
			->result();
	}

	public function itemsQuantityByYearAndChannelCube() {
		return $this->db->query("SELECT PRODUCT.NAME, CHANNEL.TYPE, YEAR.YEAR, SUM(SALES.QUANTITY) AS ILOSC FROM SALES JOIN PRODUCT ON SALES.ID_PRODUCT = PRODUCT.ID_PRODUCT JOIN DATA ON SALES.ID_DATA = DATA.ID_DATA JOIN YEAR ON DATA.ID_YEAR = YEAR.ID_YEAR JOIN CHANNEL ON SALES.ID_CHANNEL = CHANNEL.ID_CHANNEL GROUP BY CUBE(PRODUCT.NAME, CHANNEL.TYPE, YEAR.YEAR)")
			->result();
	}

	public function itemsByProducersByQuartersCube() {
		return $this->db->query("SELECT PRODUCER.NAME, QUARTER.NUM_OF_Q, YEAR.YEAR, SUM(SALES.QUANTITY) AS ILOSC FROM SALES JOIN PRODUCT ON SALES.ID_PRODUCT = PRODUCT.ID_PRODUCT JOIN PRODUCER ON PRODUCT.ID_PRODUCER = PRODUCER.ID_PRODUCER JOIN DATA ON SALES.ID_DATA = DATA.ID_DATA JOIN QUARTER ON DATA.ID_QUARTER = QUARTER.ID_QUARTER JOIN YEAR ON DATA.ID_YEAR = YEAR.ID_YEAR GROUP BY CUBE(PRODUCER.NAME, QUARTER.NUM_OF_Q, YEAR.YEAR)")
			->result();
	}

	public function invoicesSumByEmployeeByYearCube() {
		return $this->db->query("SELECT PRODUCT.NAME, EMPLOYEES.NAME || ' ' || EMPLOYEES.SURNAME AS PRACOWNIK, YEAR.YEAR, SUM(INVOICE.RESULT_PRICE) AS ILOSC FROM SALES JOIN PRODUCT ON SALES.ID_PRODUCT = PRODUCT.ID_PRODUCT JOIN EMPLOYEES ON SALES.ID_EMPLOYEES = EMPLOYEES.ID_EMPLOYEES JOIN DATA ON SALES.ID_DATA = DATA.ID_DATA JOIN YEAR ON DATA.ID_YEAR = YEAR.ID_YEAR JOIN INVOICE ON SALES.ID_INVOICE = INVOICE.ID_INVOICE WHERE ROWNUM < 10000 GROUP BY CUBE(PRODUCT.NAME, EMPLOYEES.NAME || ' ' || EMPLOYEES.SURNAME, YEAR.YEAR)")
					->result();
	}

	public function itemByPaymentGrouping() {
		return $this->db->query("SELECT PAYMENT.TYPE, PRODUCT.NAME, SUM(QUANTITY) AS ILOSC FROM SALES JOIN PAYMENT ON SALES.ID_PAYMENT = PAYMENT.ID_PAYMENT JOIN PRODUCT ON SALES.ID_PRODUCT = PRODUCT.ID_PRODUCT GROUP BY grouping sets((PAYMENT.TYPE, PRODUCT.NAME), (PRODUCT.NAME))")
			->result();
	}

	public function employeeInvoicesByPaymentGrouping() {
		return $this->db->query("SELECT EMPLOYEES.NAME || ' ' || EMPLOYEES.SURNAME AS PRACOWNIK, PAYMENT.TYPE, COUNT(SALES.ID_PAYMENT) AS ILOSC FROM SALES JOIN EMPLOYEES ON SALES.ID_EMPLOYEES = EMPLOYEES.ID_EMPLOYEES JOIN PAYMENT ON SALES.ID_PAYMENT = PAYMENT.ID_PAYMENT GROUP BY GROUPING SETS((EMPLOYEES.NAME || ' ' || EMPLOYEES.SURNAME, PAYMENT.TYPE), (PAYMENT.TYPE))")
			->result();
	}

	public function itemsQuantityByYearAndChannelGrouping() {
		return $this->db->query("SELECT PRODUCT.NAME, CHANNEL.TYPE, YEAR.YEAR, SUM(SALES.QUANTITY) AS ILOSC FROM SALES JOIN PRODUCT ON SALES.ID_PRODUCT = PRODUCT.ID_PRODUCT JOIN DATA ON SALES.ID_DATA = DATA.ID_DATA JOIN YEAR ON DATA.ID_YEAR = YEAR.ID_YEAR JOIN CHANNEL ON SALES.ID_CHANNEL = CHANNEL.ID_CHANNEL GROUP BY GROUPING SETS((PRODUCT.NAME, YEAR.YEAR), (CHANNEL.TYPE))")
			->result();
	}

	public function itemsByProducersByQuartersGrouping() {
		return $this->db->query("SELECT PRODUCER.NAME, QUARTER.NUM_OF_Q, YEAR.YEAR, SUM(SALES.QUANTITY) AS ILOSC FROM SALES JOIN PRODUCT ON SALES.ID_PRODUCT = PRODUCT.ID_PRODUCT JOIN PRODUCER ON PRODUCT.ID_PRODUCER = PRODUCER.ID_PRODUCER JOIN DATA ON SALES.ID_DATA = DATA.ID_DATA JOIN QUARTER ON DATA.ID_QUARTER = QUARTER.ID_QUARTER JOIN YEAR ON DATA.ID_YEAR = YEAR.ID_YEAR GROUP BY GROUPING SETS((PRODUCER.NAME, QUARTER.NUM_OF_Q), (YEAR.YEAR))")
			->result();
	}

	public function invoicesSumByEmployeeByYearGrouping() {
		return $this->db->query("SELECT PRODUCT.NAME, EMPLOYEES.NAME || ' ' || EMPLOYEES.SURNAME AS PRACOWNIK, YEAR.YEAR, SUM(INVOICE.RESULT_PRICE) AS ILOSC FROM SALES JOIN PRODUCT ON SALES.ID_PRODUCT = PRODUCT.ID_PRODUCT JOIN EMPLOYEES ON SALES.ID_EMPLOYEES = EMPLOYEES.ID_EMPLOYEES JOIN DATA ON SALES.ID_DATA = DATA.ID_DATA JOIN YEAR ON DATA.ID_YEAR = YEAR.ID_YEAR JOIN INVOICE ON SALES.ID_INVOICE = INVOICE.ID_INVOICE GROUP BY GROUPING SETS((PRODUCT.NAME, EMPLOYEES.NAME || ' ' || EMPLOYEES.SURNAME), (YEAR.YEAR))")
					->result();
	}

	public function rankBySales() {
		return $this->db->query("SELECT author.name, author.surname, sum(sales.quantity) as suma,
			rank() over(partition by null order by sum(sales.quantity) DESC) as ranking  FROM sales
			join product on
			product.ID_PRODUCT = sales.ID_PRODUCT
			join Author on
			Author.ID_AUTHOR = product.ID_AUTHOR
			group by
			author.name, Author.SURNAME")->result();
	}

	public function rankByCategory() {
		return $this->db->query("SELECT category.name, channel.type, Sum(sales.quantity) as suma,
			rank() over(order by sum(sales.quantity) DESC) as ranking  FROM sales
			inner join product on
			product.ID_PRODUCT = sales.ID_PRODUCT
			inner join CHANNEL on
			sales.ID_CHANNEL = CHANNEL.ID_CHANNEL
			inner join CATEGORY on
			product.ID_CATEGORY = CATEGORY.ID_CATEGORY
			where ROWNUM <=10+2
			group by
			category.name, channel.type")->result();
	}

	public function rankByDay() {
		//todo zle
		return $this->db->query("SELECT day_of_the_week.name, Sum(sales.quantity) as suma,
			rank() over(order by sum(sales.quantity) DESC) as ranking  FROM sales
			inner join data on
			data.ID_DATA = sales.ID_DATA
			inner join day_of_the_week on
			day_of_the_week.ID_DAY_OF_THE_WEEK = data.ID_DAY_OF_THE_WEEK
			group by
			day_of_the_week.name")->result();
	}

	public function rankByMonth() {
		return $this->db->query("SELECT month.month as MIESIAC, year.year AS ROK, Sum(invoice.result_price) as wartosc_faktur,
			rank() over(order by Sum(invoice.result_price) DESC) as ranking  FROM invoice
			inner join sales on
			invoice.id_invoice = sales.ID_INVOICE
			inner join data on
			sales.ID_DATA = data.ID_DATA
			inner join month on
			data.ID_MONTH = month.ID_MONTH
			inner join year on
			data.ID_YEAR = year.id_YEAR
			group by
			month.MONTH, year.year")->result();
	}

	public function salesPercentageByAll() {
		return $this->db->query("SELECT p.NAME, y.YEAR, SUM(s.QUANTITY) as SUMA, ROUND(100*s.QUANTITY/(SUM(s.QUANTITY) OVER(PARTITION BY p.id_product)),2) \"procent\" FROM SALES s JOIN PRODUCT p ON s.ID_PRODUCT = p.ID_PRODUCT JOIN DATA d ON s.ID_DATA = d.ID_DATA JOIN YEAR y ON d.ID_YEAR = y.ID_YEAR WHERE ROWNUM < 5000 GROUP BY p.id_product, p.NAME, y.YEAR, s.QUANTITY")
		->result();
	}

	public function itemByChannelPercent() {
		return $this->db->query("SELECT e.NAME || ' ' || e.SURNAME AS PRACOWNIK, py.TYPE AS PLATNOSC, SUM(p.PRICE) OVER (PARTITION BY p.ID_PRODUCT) sum_kwota, ROUND(100*p.PRICE/SUM(p.PRICE) OVER (PARTITION BY p.ID_PRODUCT),2) \"udzial\" FROM SALES s JOIN EMPLOYEES e ON s.ID_EMPLOYEES = e.ID_EMPLOYEES JOIN PRODUCT p ON s.ID_PRODUCT = p.ID_PRODUCT JOIN PAYMENT py ON s.ID_PAYMENT = py.ID_PAYMENT WHERE ROWNUM < 5000 GROUP BY e.NAME || ' ' || e.SURNAME, py.TYPE, p.PRICE, p.ID_PRODUCT")
		->result();
	}

	public function resultQuery() {
		$query = $this->input->post("queryarea");
		if($query[0] == "D" || $query[0] == "d") die();
		if(substr($query, -1) === ";") {
			$query = substr($query, 0, -1);
		}
		$query = trim($query);
		return $this->db->query($query)->result();
	}

	public function combinedQuery() {
		$query = "SELECT ";
		$query .= $this->input->post("colsorder") . ", ";
		$query .= $this->input->post("optionsRadiosFunction") . "(";
		$query .= $this->input->post("toFunc");
		$query .= ")";
		$query .= " FROM SALES JOIN CLIENTS ON SALES.ID_CLIENTS = CLIENTS.ID_CLIENTS JOIN EMPLOYEES ON SALES.ID_EMPLOYEES = EMPLOYEES.ID_EMPLOYEES JOIN DATA ON SALES.ID_DATA = DATA.ID_DATA JOIN PRODUCT ON SALES.ID_PRODUCT = PRODUCT.ID_PRODUCT JOIN PAYMENT ON SALES.ID_PAYMENT = PAYMENT.ID_PAYMENT JOIN CHANNEL ON SALES.ID_CHANNEL = CHANNEL.ID_CHANNEL JOIN INVOICE ON SALES.ID_INVOICE = INVOICE.ID_INVOICE JOIN DAY_OF_WEEK ON DATA.ID_DAY_OF_THE_WEEK = DATA.ID_DAY_OF_THE_WEEK JOIN QUARTER ON DATA.ID_QUARTER = QUARTER.ID_QUARTER JOIN MONTH ON DATA.ID_MONTH = MONTH.ID_MONTH JOIN YEAR ON DATA.ID_YEAR = YEAR.ID_YEAR JOIN CATEGORY ON PRODUCT.ID_CATEGORY = CATEGORY.ID_CATEGORY JOIN PRODUCER ON PRODUCT.ID_PRODUCER = PRODUCER.ID_PRODUCER JOIN AUTHOR ON PRODUCT.ID_AUTHOR = AUTHOR.ID_AUTHOR WHERE ROWNUM < 5000 GROUP BY ";
		$query .= $this->input->post("optionsRadios");
		$query .= "(";
		$query .= $this->input->post("colsorder");
		$query .= ")";

		return $this->db->query($query)->result();
	}
}

/* End of file model_m.php */
/* Location: ./application/models/model_m.php */