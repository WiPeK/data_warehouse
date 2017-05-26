<form action="<?php echo site_url('home/combinedQuery'); ?>" method="post" accept-charset="utf-8" id="combineForm">
	<div class="alert alert-info" role="alert">
	  <strong>Skomponuj swoje własne zapytanie</strong>
	</div>

	<div class="form-group">
	    <label for="exampleSelect2">Kolumny</label>
	    <select multiple class="form-control" id="exampleSelect2" name="toSelect">
	      <option value="AUTHOR.ID_AUTHOR">AUTHOR.ID_AUTHOR</option>
	      <option value="AUTHOR.NAME">AUTHOR.NAME</option>
	      <option value="AUTHOR.SURNAME">AUTHOR.SURNAME</option>
	      <option value="AUTHOR.ALIAS">AUTHOR.ALIAS</option>
	      <option value="CATEGORY.ID_CATEGORY">CATEGORY.ID_CATEGORY</option>
	      <option value="CATEGORY.NAME">CATEGORY.NAME</option>
	      <option value="CHANNEL.ID_CHANNEL">CHANNEL.ID_CHANNEL</option>
	      <option value="CHANNEL.TYPE">CHANNEL.TYPE</option>
	      <option value="CLIENTS.ID_CLIENTS">CLIENTS.ID_CLIENTS</option>
	      <option value="CLIENTS.NAME">CLIENTS.NAME</option>
	      <option value="CLIENTS.SURNAME">CLIENTS.SURNAME</option>
	      <option value="CLIENTS.ADDRESS">CLIENTS.ADDRESS</option>
	      <option value="CLIENTS.PHONE">CLIENTS.PHONE</option>
	      <option value="CLIENTS.EMAIL">CLIENTS.EMAIL</option>
	      <option value="DATA.ID_DATA">DATA.ID_DATA</option>
	      <option value="DATA.DAY">DATA.DAY</option>
	      <option value="DAY_OF_WEEK.ID_DAY_OF_THE_WEEK">DAY_OF_WEEK.ID_DAY_OF_THE_WEEK</option>
	      <option value="DAY_OF_WEEK.NAME">DAY_OF_WEEK.NAME</option>
	      <option value="EMPLOYEES.ID_EMPLOYEES">EMPLOYEES.ID_EMPLOYEES</option>
	      <option value="EMPLOYEES.NAME">EMPLOYEES.NAME</option>
	      <option value="EMPLOYEES.SURNAME">EMPLOYEES.SURNAME</option>
	      <option value="EMPLOYEES.ADDRESS">EMPLOYEES.ADDRESS</option>
	      <option value="EMPLOYEES.PHONE_NUMBER">EMPLOYEES.PHONE_NUMBER</option>
	      <option value="EMPLOYEES.EMAIL">EMPLOYEES.EMAIL</option>
	      <option value="EMPLOYEES.DATE_OF_EMPLOYMENT">EMPLOYEES.DATE_OF_EMPLOYMENT</option>
	      <option value="EMPLOYEES.SALARY">EMPLOYEES.SALARY</option>
	      <option value="INVOICE.ID_INVOICE">INVOICE.ID_INVOICE</option>
	      <option value="INVOICE.RESULT_PRICE">INVOICE.RESULT_PRICE</option>
	      <option value="INVOICE.TAX_VALUE">INVOICE.TAX_VALUE</option>
	      <option value="INVOICE.DISCOUNT">INVOICE.DISCOUNT</option>
	      <option value="MONTH.ID_MONTH">MONTH.ID_MONTH</option>
	      <option value="MONTH.MONTH">MONTH.MONTH</option>
	      <option value="PAYMENT.ID_PAYMENT">PAYMENT.ID_PAYMENT</option>
	      <option value="PAYMENT.TYPE">PAYMENT.TYPE</option>
	      <option value="PRODUCER.ID_PRODUCER">PRODUCER.ID_PRODUCER</option>
	      <option value="PRODUCER.NAME">PRODUCER.NAME</option>
	      <option value="PRODUCER.ADDRESS">PRODUCER.ADDRESS</option>
	      <option value="PRODUCT.ID_PRODUCT">PRODUCT.ID_PRODUCT</option>
	      <option value="PRODUCT.NAME">PRODUCT.NAME</option>
	      <option value="PRODUCT.PRICE">PRODUCT.PRICE</option>
	      <option value="QUARTER.ID_QUERTER">QUARTER.ID_QUERTER</option>
	      <option value="QUARTER.NUM_OF_Q">QUARTER.NUM_OF_Q</option>
	      <option value="SALES.QUANTITY">SALES.QUANTITY</option>
	      <option value="YEAR.ID_YEAR">YEAR.ID_YEAR</option>
	      <option value="YEAR.YEAR">YEAR.YEAR</option>
	    </select>
  	</div>

    <fieldset class="form-group">
    <legend>Funkcja agregująca</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadiosFunction" id="optionsRadios11" value="sum" checked>
        Sum
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadiosFunction" id="optionsRadios12" value="count">
        Count
      </label>
    </div>
  </fieldset>
  
  <div class="form-group">
    <label for="exampleSelect1">Kolumna do funkcji</label>
    <select class="form-control" id="exampleSelect1" name="toFunc">
      <option value="AUTHOR.ID_AUTHOR">AUTHOR.ID_AUTHOR</option>
      <option value="CATEGORY.ID_CATEGORY">CATEGORY.ID_CATEGORY</option>
      <option value="CHANNEL.ID_CHANNEL">CHANNEL.ID_CHANNEL</option>
      <option value="CLIENTS.ID_CLIENTS">CLIENTS.ID_CLIENTS</option>
      <option value="DATA.ID_DATA">DATA.ID_DATA</option>
      <option value="DAY_OF_WEEK.ID_DAY_OF_THE_WEEK">DAY_OF_WEEK.ID_DAY_OF_THE_WEEK</option>
      <option value="EMPLOYEES.ID_EMPLOYEES">EMPLOYEES.ID_EMPLOYEES</option>
      <option value="INVOICE.ID_INVOICE">INVOICE.ID_INVOICE</option>
      <option value="INVOICE.RESULT_PRICE">INVOICE.RESULT_PRICE</option>
      <option value="INVOICE.TAX_VALUE">INVOICE.TAX_VALUE</option>
      <option value="INVOICE.DISCOUNT">INVOICE.DISCOUNT</option>
      <option value="MONTH.ID_MONTH">MONTH.ID_MONTH</option>
      <option value="PAYMENT.ID_PAYMENT">PAYMENT.ID_PAYMENT</option>
      <option value="PRODUCER.ID_PRODUCER">PRODUCER.ID_PRODUCER</option>
      <option value="PRODUCT.ID_PRODUCT">PRODUCT.ID_PRODUCT</option>
      <option value="PRODUCT.PRICE">PRODUCT.PRICE</option>
      <option value="QUARTER.ID_QUERTER">QUARTER.ID_QUERTER</option>
      <option value="QUARTER.NUM_OF_Q">QUARTER.NUM_OF_Q</option>
      <option value="SALES.QUANTITY">SALES.QUANTITY</option>
      <option value="YEAR.ID_YEAR">YEAR.ID_YEAR</option>
    </select>
  </div>
  <fieldset class="form-group">
    <legend>Grouping function</legend>
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
  	<div class="alert alert-warning" role="alert">
	  <strong>Ostrzeżenie!</strong> Zapytanie może nic nie zwrócić
	</div>
	<input type="hidden" id="formGroupExampleInput" name="colsorder" value="">
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