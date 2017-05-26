<div class="row">
    <?php if(isset($_POST["queryarea"])): ?>
        <div class="alert alert-info" role="alert">
          <strong><?php echo $_POST["queryarea"]; ?></strong>
        </div>
    <?php endif; ?>
	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
	<?php if (isset($items)): ?>
        <?php $cols = get_object_vars($items[0]); ?>
		<thead>
            <tr>
            <?php foreach ($cols as $key => $value): ?>
                <th><?php echo $key; ?></th>
            <?php endforeach; ?>
            </tr>
        </thead>
        <tfoot>
            <tr>
            <?php foreach ($cols as $key => $value): ?>
                <th><?php echo $key; ?></th>
            <?php endforeach; ?>
            </tr>
        </tfoot>
        <tbody>
        	<?php foreach($items as $item): ?>
                <tr>
                <?php foreach ($cols as $key => $value): ?>
                        <td><?php echo $item->$key; ?></td>
                <?php endforeach; ?>
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