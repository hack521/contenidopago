<div class="accounts form">
<?php echo $this->Form->create('Account');?>
	<fieldset>
		<legend><?php __('Staff Edit Account'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('users_id');
		echo $this->Form->input('account_kinds_id');
		echo $this->Form->input('status_id');
		echo $this->Form->input('payment_kinds_id');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('numero_cuenta');
		echo $this->Form->input('cuenta_banco_defecto');
		echo $this->Form->input('cuenta_online_defecto');
		echo $this->Form->input('cuenta_transferencia_defecto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Account.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Account.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Accounts', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Account Kinds', true), array('controller' => 'account_kinds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account Kinds', true), array('controller' => 'account_kinds', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses', true), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status', true), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Kinds', true), array('controller' => 'payment_kinds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Kinds', true), array('controller' => 'payment_kinds', 'action' => 'add')); ?> </li>
	</ul>
</div>