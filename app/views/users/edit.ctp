<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php __('Editar Perfil'); ?></legend>
	<?php
		echo $this->Form->input('identificacion');
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('telefono');
		echo $this->Form->input('celular');
		echo $this->Form->input('direccion');
		echo $this->Form->input('direccion_alt');
		echo $this->Form->input('codigo_postal');
		echo $this->Form->input('correo_electronico');
		echo $this->Form->input('correo_alternativo');
		echo $this->Form->input('facebook');
		echo $this->Form->input('twitter');
		echo $this->Form->input('password');
		echo $this->Form->input('countries_id');
		echo $this->Form->input('region_id');
		echo $this->Form->input('ciudades_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Volver', true), array('action' => 'profile'));?></li>
	</ul>
</div>