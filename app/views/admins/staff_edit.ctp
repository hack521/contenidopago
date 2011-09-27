<div class="admins form">
<?php echo $this->Form->create('Admin');?>
	<fieldset>
		<legend><?php __('Staff Edit Admin'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('status_id');
		echo $this->Form->input('usuario');
		echo $this->Form->input('password');
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('telefono');
		echo $this->Form->input('celular');
		echo $this->Form->input('direccion');
		echo $this->Form->input('correo_electronico');
		echo $this->Form->input('correo_alternativo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Admin.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Admin.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Admins', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Statuses', true), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status', true), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
	</ul>
</div>