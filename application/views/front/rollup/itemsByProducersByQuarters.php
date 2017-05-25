<div class="row">
    <div class="alert alert-info" role="alert">
      <strong>Ile przedmiotów danego producenta zostało sprzedane w każdym kwartale każdego roku</strong>
    </div>
	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
	<?php if (isset($items)): ?>
		<thead>
            <tr>
                <th>Nazwa producenta</th>
                <th>Numer kwartału</th>
                <th>Rok</th>
                <th>Ilość</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nazwa producenta</th>
                <th>Numer kwartału</th>
                <th>Rok</th>
                <th>Ilość</th>
            </tr>
        </tfoot>
        <tbody>
        	<?php foreach($items as $item): ?>
				<tr>
	                <td><?php echo $item->NAME; ?></td>
	                <td><?php echo $item->NUM_OF_Q; ?></td>
                    <td><?php echo $item->YEAR; ?></td>
	                <td><?php echo $item->ILOSC; ?></td>
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