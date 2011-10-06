<option value='0'>Seleccionar</option>
<?php
foreach($ShortNumber as $province){
	$id = $province['ShortNumber']['id'];
	$descripcion = $province['ShortNumber']['numero'];
	?>
	<option value='<?php echo $id; ?>'><? echo $descripcion; ?></option>
<?php } ?>