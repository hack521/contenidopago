<option value='0'>Seleccionar</option>
<?php
foreach($region as $province){
	$id = $province['Region']['id'];
	$descripcion = $province['Region']['descripcion'];
	?>
	<option value='<?php echo $id; ?>'><? echo $descripcion; ?></option>
<?php } ?>