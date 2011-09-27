<select>
<option value='0'>Seleccionar</option>
<?php
foreach ($region as $province):
	?>
	<option value='<?php echo $province['Region']['id']; ?>'>
	<?php echo $province['Region']['descripcion']; ?>
	</option>
<?php endforeach; ?>
?>
</select>