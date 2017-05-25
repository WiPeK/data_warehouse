<div class="row">
    <div class="alert alert-info" role="alert">
      <strong>Ranking autorów wg sprzedanych pozycji</strong>
    </div>
	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
	<?php if (isset($items)): ?>
		<thead>
            <tr>
                <th>Imie autora</th>
                <th>Nazwisko autora</th>
                <th>Suma</th>
                <th>Pozycja</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Imie autora</th>
                <th>Nazwisko autora</th>
                <th>Suma</th>
                <th>Pozycja</th>
            </tr>
        </tfoot>
        <tbody>
        	<?php foreach($items as $item): ?>
				<tr>
	                <td><?php echo $item->NAME; ?></td>
	                <td><?php echo $item->SURNAME; ?></td>
                    <td><?php echo $item->SUMA; ?></td>
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