<div class="row">
    <div class="alert alert-info" role="alert">
      <strong>W jakim miesiącu roku był najlepszy obrót</strong>
    </div>
	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
	<?php if (isset($items)): ?>
		<thead>
            <tr>
                <th>MIESIAC</th>
                <th>ROK</th>
                <th>WARTOSC FAKTUR</th>
                <th>Pozycja</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>MIESIAC</th>
                <th>ROK</th>
                <th>WARTOSC FAKTUR</th>
                <th>Pozycja</th>
            </tr>
        </tfoot>
        <tbody>
        	<?php foreach($items as $item): ?>
				<tr>
	                <td><?php echo $item->MIESIAC; ?></td>
	                <td><?php echo $item->ROK; ?></td>
                    <td><?php echo $item->WARTOSC_FAKTUR; ?></td>
	                <td><?php echo $item->RANKING; ?></td>
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