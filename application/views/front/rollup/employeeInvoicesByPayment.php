<div class="row">
    <div class="alert alert-info" role="alert">
      <strong>Ile faktur wystawił pracownik dla danej płatności</strong>
    </div>
	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
	<?php if (isset($items)): ?>
		<thead>
            <tr>
                <th>Pracownik</th>
                <th>Typ zapłaty</th>
                <th>Ilość</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Pracownik</th>
                <th>Typ zapłaty</th>
                <th>Ilość</th>
            </tr>
        </tfoot>
        <tbody>
        	<?php foreach($items as $item): ?>
				<tr>
	                <td><?php echo $item->PRACOWNIK; ?></td>
	                <td><?php echo $item->TYPE; ?></td>
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