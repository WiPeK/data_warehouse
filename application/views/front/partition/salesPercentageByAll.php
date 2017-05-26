<div class="row">
    <div class="alert alert-info" role="alert">
      <strong>Jaki procent sprzedawanych produktow w danym roku wzgledem calosci</strong>
    </div>
	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
	<?php if (isset($items)): ?>
		<thead>
            <tr>
                <th>Nazwa przedmiotu</th>
                <th>Rok</th>
                <th>Suma</th>
                <th>Procent</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nazwa przedmiotu</th>
                <th>Rok</th>
                <th>Suma</th>
                <th>Procent</th>
            </tr>
        </tfoot>
        <tbody>
        	<?php foreach($items as $item): ?>
				<tr>
	                <td><?php echo $item->NAME; ?></td>
	                <td><?php echo $item->YEAR; ?></td>
                    <td><?php echo $item->SUMA; ?></td>
	                <td><?php echo $item->procent; ?></td>
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