<div class="users form">
<?php echo $this->Form->create('User');?>
	<br/>
	<h2><?php __('Registro de Usuarios') ?></h2>
	<br/>
	<br/>
	<fieldset>
		<legend><?php __('Datos Personales'); ?></legend>
	<?php
		echo $this->Form->input('identificacion');
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('telefono');
		echo $this->Form->input('celular');
		echo $this->Form->input('direccion');
		echo $this->Form->input('codigo_postal');
	?>
		</fieldset>
		<fieldset>
			<legend><?php __('Pais de Residencia'); ?></legend>
			<?php
				echo $this->Form->input('countries_id');
				echo $this->Form->input('region_id');
				echo $this->Form->input('ciudades_id');
			?>
		</fieldset>
		<fieldset>
			<legend><?php __('Datos de registro'); ?></legend>
			<?php
				echo $this->Form->input('usuario');
				echo $this->Form->input('password');
			?>
		</fieldset>
	<?php echo $this->Form->end(__('Enviar', true)); ?>
</div>