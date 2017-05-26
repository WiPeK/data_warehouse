<div class="row">
    <div class="alert alert-info" role="alert">
      <strong>Ile sztuk danego przedmiotu zapłacone w jaki sposób i udział procentowy zaakceptowane przez pracownika</strong>
    </div>
	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
	<?php if (isset($items)): ?>
		<thead>
            <tr>
                <th>Pracownik</th>
                <th>Zapłata</th>
                <th>Suma</th>
                <th>Udział procentowy</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Pracownik</th>
                <th>Zapłata</th>
                <th>Suma</th>
                <th>Udział procentowy</th>
            </tr>
        </tfoot>
        <tbody>
        	<?php foreach($items as $item): ?>
				<tr>
                    <td><?php echo $item->PRACOWNIK; ?></td>
	                <td><?php echo $item->PLATNOSC; ?></td>
	                <td><?php echo $item->SUM_KWOTA; ?></td>
	                <td><?php echo $item->udzial; ?></td>
            	</tr>
        	<?php endforeach; ?>
        </tbody>
	<?php else: ?>
		<div class="alert alert-danger" role="alert">
  			<strong>Brak wyników</strong>
		</div>
	<?php endif ?>
    </table>
</div>