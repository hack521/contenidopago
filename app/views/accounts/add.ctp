<div class="accounts form">
<?php echo $this->Form->create('Account');?>
	<fieldset>
		<legend><?php __('Nueva Cuenta'); ?></legend>
	<?php
		//echo $this->Form->input('account_kinds_id');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('payment_kinds_id');

		echo $this->Form->input('bank_accounts_id', array('options' => $bankAccounts, 'empty' => '-- Seleccionar --'), null, array('id' => 'countries_id', 'label' => 'Country'));
		echo $this->Form->input('online_accounts_id', array('options' => $onlineAccounts, 'empty' => '-- Seleccionar --'), null, array('id' => 'countries_id', 'label' => 'Country'));
		echo $this->Form->input('transfer_accounts_id', array('options' => $transferAccounts, 'empty' => '-- Seleccionar --'), null, array('id' => 'countries_id', 'label' => 'Country'));
		
		//echo $this->Form->input('status_id');
		//echo $this->Form->input('cuenta_banco_defecto');
		//echo $this->Form->input('cuenta_online_defecto');
		//echo $this->Form->input('cuenta_transferencia_defecto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Volver', true), array('action' => 'index'));?></li>
	</ul>
</div>