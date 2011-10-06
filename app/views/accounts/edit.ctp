<div class="accounts form">
<?php echo $this->Form->create('Account');?>
	<fieldset>
		<legend><?php __('Configurar Cuenta'); ?></legend>
	<?php
		echo $this->Form->input('descripcion');
		echo $this->Form->input('payment_kinds_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>	
		<li><?php echo $this->Html->link(__('Volver', true), array('action' => 'index'));?></li>
	</ul>
</div>