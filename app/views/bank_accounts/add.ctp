<div class="bankAccounts form">
<?php echo $this->Form->create('BankAccount');?>
	<fieldset>
		<legend><?php __('Nueva Cuenta Bancaria'); ?></legend>
	<?php
		echo $this->Form->input('countries_id');
		echo $this->Form->input('banks_id');
		echo $this->Form->input('numero_cuenta');
		echo $this->Form->input('identificacion_beneficiario');
		echo $this->Form->input('beneficiario');
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