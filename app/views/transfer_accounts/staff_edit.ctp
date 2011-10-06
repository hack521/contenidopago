<div class="transferAccounts form">
<?php echo $this->Form->create('TransferAccount');?>
	<fieldset>
		<legend><?php __('Staff Edit Transfer Account'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('countries_id');
		echo $this->Form->input('status_id');
		echo $this->Form->input('users_id');
		echo $this->Form->input('metodo_pago_id');
		echo $this->Form->input('identificacion');
		echo $this->Form->input('nombres_beneficiario');
		echo $this->Form->input('apellidos_beneficiario');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('TransferAccount.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('TransferAccount.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Transfer Accounts', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Countries', true), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Countries', true), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses', true), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status', true), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>