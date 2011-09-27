<div class="accounts form">
<?php echo $this->Form->create('Account');?>
	<fieldset>
		<legend><?php __('Nueva Cuenta'); ?></legend>
	<?php
		//echo $this->Form->input('account_kinds_id');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('payment_kinds_id');
		//echo $this->Form->input('status_id');
		//echo $this->Form->input('cuenta_banco_defecto');
		//echo $this->Form->input('cuenta_online_defecto');
		//echo $this->Form->input('cuenta_transferencia_defecto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Volver', true), array('action' => 'index'));?></li>
	</ul>
</div>