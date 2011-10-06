<div class="bankAccounts form">
<?php echo $this->Form->create('BankAccount');?>
	<fieldset>
		<legend><?php __('Staff Add Bank Account'); ?></legend>
	<?php
		echo $this->Form->input('banks_id');
		echo $this->Form->input('status_id');
		echo $this->Form->input('users_id');
		echo $this->Form->input('numero_cuenta');
		echo $this->Form->input('identificacion_beneficiario');
		echo $this->Form->input('beneficiario');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Bank Accounts', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Banks', true), array('controller' => 'banks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Banks', true), array('controller' => 'banks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses', true), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status', true), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>