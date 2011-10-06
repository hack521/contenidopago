<option value='0'>Seleccionar</option>
<?php
foreach ($cities as $citi):
	?>
	<option value='<?php echo $citi['City']['id']; ?>'>
	<?php echo $citi['City']['descripcion']; ?>
	</option>
<?php endforeach; ?>
?>