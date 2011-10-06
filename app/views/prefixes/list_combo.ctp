<option value='0'>Seleccionar</option>
<?php
foreach($Prefix as $province){
	$id = $province['Prefix']['id'];
	$descripcion = $province['Prefix']['numero'];
	?>
	<option value='<?php echo $id; ?>'><? echo $descripcion; ?></option>
<?php } ?>