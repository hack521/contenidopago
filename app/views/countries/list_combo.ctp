<select>
<option value='0'>Seleccionar</option>
<?php
foreach ($countries as $country):
	?>
	<option value='<?php echo $country['Country']['id']; ?>'><?php echo $country['Country']['descripcion']; ?></option>
<?php endforeach; ?>
?>
</select>