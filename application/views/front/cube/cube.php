<div class="row">
	<ul class="querybuttons">
		<li><a href="<?php echo site_url("cube/itemByPayment"); ?>" class="btn btn-primary btn-lg btn-bloc">Za ile sztuk danego przedmiotu zapłacono w jaki sposób</a></li>
		<li><a href="<?php echo site_url("cube/employeeInvoicesByPayment"); ?>" class="btn btn-primary btn-lg btn-bloc">Ile faktur wystawił pracownik dla danej płatności</a></li>
		<li><a href="<?php echo site_url("cube/itemsQuantityByYearAndChannel"); ?>" class="btn btn-primary btn-lg btn-bloc">Ile jakich przedmiotów zostało sprzedane w danych latach dla danego typu dostawy</a></li>
		<li><a href="<?php echo site_url("cube/itemsByProducersByQuarters"); ?>" class="btn btn-primary btn-lg btn-bloc">Ile przedmiotów danego producenta zostało sprzedane w każdym kwartale każdego roku</a></li>
		<li><a href="<?php echo site_url("cube/invoicesSumByEmployeeByYear"); ?>" class="btn btn-primary btn-lg btn-bloc">Suma faktur wystawionych przez danego pracownika dla danego przedmiotu w każdym roku</a></li>
	</ul>
</div>