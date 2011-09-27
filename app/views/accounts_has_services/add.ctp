<div class="accountsHasServices form">
<?php echo $this->Form->create('AccountsHasService');?>
	<fieldset>
		<legend><?php __('Nuevo SMS premium'); ?></legend>
	<?php
		echo $this->Form->input('accounts_id');
		echo $this->Form->input('prefixes_id');
		echo $this->Form->input('short_numbers_id');
		echo $this->Form->input('account_identifier_id');
		echo $this->Form->input('palabra');
		echo $this->Form->input('fecha');
		echo $this->Form->input('currencies_id');
		echo $this->Form->input('status_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Volver', true), array('action' => 'index')); ?> </li>
		<!--
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
		<li><?php echo $this->Html->link(__('New Status', true), array('controller' => 'statuses', 'action' => 'add')); ?> </li>-->
	</ul>
</div>