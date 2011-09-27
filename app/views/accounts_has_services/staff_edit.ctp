<div class="accountsHasServices form">
<?php echo $this->Form->create('AccountsHasService');?>
	<fieldset>
		<legend><?php __('Staff Edit Accounts Has Service'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('accounts_id');
		echo $this->Form->input('services_id');
		echo $this->Form->input('prefixes_id');
		echo $this->Form->input('short_numbers_id');
		echo $this->Form->input('account_identifier_id');
		echo $this->Form->input('currencies_id');
		echo $this->Form->input('status_id');
		echo $this->Form->input('palabra');
		echo $this->Form->input('comision');
		echo $this->Form->input('fecha');
		echo $this->Form->input('saldo_actual');
		echo $this->Form->input('saldo_anterior');
		echo $this->Form->input('saldo_promedio');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('AccountsHasService.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('AccountsHasService.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Accounts Has Services', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Accounts', true), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accounts', true), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Services', true), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Services', true), array('controller' => 'services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Prefixes', true), array('controller' => 'prefixes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prefixes', true), array('controller' => 'prefixes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Short Numbers', true), array('controller' => 'short_numbers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Short Numbers', true), array('controller' => 'short_numbers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Account Identifiers', true), array('controller' => 'account_identifiers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account Identifier', true), array('controller' => 'account_identifiers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Currencies', true), array('controller' => 'currencies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currencies', true), array('controller' => 'currencies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses', true), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status', true), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
	</ul>
</div>