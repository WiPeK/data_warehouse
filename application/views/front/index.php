<form action="<?php echo site_url('home/combinedQuery'); ?>" method="post" accept-charset="utf-8">
	<div class="alert alert-info" role="alert">
	  <strong>Skomponuj swoje własne zapytanie</strong>
	</div>

	<div class="form-group">
	    <label for="exampleSelect2">Kolumny</label>
	    <select multiple class="form-control" id="exampleSelect2">
	      <option>AUTHOR.ID_AUTHOR</option>
	      <option>AUTHOR.NAME</option>
	      <option>AUTHOR.SURNAME</option>
	      <option>AUTHOR.ALIAS</option>
	      <option>CATEGORY.ID_CATEGORY</option>
	      <option>CATEGORY.NAME</option>
	      <option>CHANNEL.ID_CHANNEL</option>
	      <option>CHANNEL.TYPE</option>
	      <option>CLIENTS.ID_CLIENTS</option>
	      <option>CLIENTS.NAME</option>
	      <option>CLIENTS.SURNAME</option>
	      <option>CLIENTS.ADDRESS</option>
	      <option>CLIENTS.PHONE</option>
	      <option>CLIENTS.EMAIL</option>
	      <option>DATA.ID_DATA</option>
	      <option>DATA.DAY</option>
	      <option>DAY_OF_WEEK.ID_DAY_OF_THE_WEEK</option>
	      <option>DAY_OF_WEEK.NAME</option>
	      <option>EMPLOYEES.ID_EMPLOYEES</option>
	      <option>EMPLOYEES.NAME</option>
	      <option>EMPLOYEES.SURNAME</option>
	      <option>EMPLOYEES.ADDRESS</option>
	      <option>EMPLOYEES.PHONE_NUMBER</option>
	      <option>EMPLOYEES.EMAIL</option>
	      <option>EMPLOYEES.DATE_OF_EMPLOYMENT</option>
	      <option>EMPLOYEES.SALARY</option>
	      <option>INVOICE.ID_INVOICE</option>
	      <option>INVOICE.RESULT_PRICE</option>
	      <option>INVOICE.TAX_VALUE</option>
	      <option>INVOICE.DISCOUNT</option>
	      <option>MONTH.ID_MONTH</option>
	      <option>MONTH.MONTH</option>
	      <option>PAYMENT.ID_PAYMENT</option>
	      <option>PAYMENT.TYPE</option>
	      <option>PRODUCER.ID_PRODUCER</option>
	      <option>PRODUCER.NAME</option>
	      <option>PRODUCER.ADDRESS</option>
	      <option>PRODUCT.ID_PRODUCT</option>
	      <option>PRODUCT.NAME</option>
	      <option>PRODUCT.PRICE</option>
	      <option>QUARTER.ID_QUERTER</option>
	      <option>QUARTER.NUM_OF_Q</option>
	      <option>SALES.QUANTITY</option>
	      <option>YEAR.ID_YEAR</option>
	      <option>YEAR.YEAR</option>
	    </select>
  	</div>

    <fieldset class="form-group">
    <legend>Funkcja</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="cube" checked>
        Cube
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="rollup">
        Rollup
      </label>
    </div>
  </fieldset>
  <div class="form-group">
    <label for="exampleSelect1">Kolumna do funkcji</label>
    <select class="form-control" id="exampleSelect1">
      <option>AUTHOR.ID_AUTHOR</option>
      <option>CATEGORY.ID_CATEGORY</option>
      <option>CHANNEL.ID_CHANNEL</option>
      <option>CLIENTS.ID_CLIENTS</option>
      <option>DATA.ID_DATA</option>
      <option>DAY_OF_WEEK.ID_DAY_OF_THE_WEEK</option>
      <option>EMPLOYEES.ID_EMPLOYEES</option>
      <option>INVOICE.ID_INVOICE</option>
      <option>INVOICE.RESULT_PRICE</option>
      <option>INVOICE.TAX_VALUE</option>
      <option>INVOICE.DISCOUNT</option>
      <option>MONTH.ID_MONTH</option>
      <option>PAYMENT.ID_PAYMENT</option>
      <option>PRODUCER.ID_PRODUCER</option>
      <option>PRODUCT.ID_PRODUCT</option>
      <option>PRODUCT.PRICE</option>
      <option>QUARTER.ID_QUERTER</option>
      <option>QUARTER.NUM_OF_Q</option>
      <option>SALES.QUANTITY</option>
      <option>YEAR.ID_YEAR</option>
    </select>
  </div>
  <div class="alert alert-warning" role="alert">
  <strong>Ostrzeżenie!</strong> Zapytanie może nic nie zwrócić
</div>
	<button type="submit" name="submit" class="btn btn-primary">Uruchom</button>
</form>
<hr>
<form action="<?php echo site_url('home/resultQuery'); ?>" method="post" accept-charset="utf-8">
	<div class="alert alert-info" role="alert">
	  <strong>Wpisz swoje własne zapytanie</strong>
	</div>
	<div class="form-group">
	    <label for="exampleTextarea">Query</label>
	    <textarea name="queryarea" class="form-control" id="exampleTextarea" rows="3"></textarea>
	</div>
	<button type="submit" name="submit" class="btn btn-primary">Uruchom</button>
</form>