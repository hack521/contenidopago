<div class="onlineAccounts form">
<?php echo $this->Form->create('OnlineAccount');?>
	<fieldset>
		<legend><?php __('Staff Edit Online Account'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('users_id');
		echo $this->Form->input('status_id');
		echo $this->Form->input('metodo_pago_id');
		echo $this->Form->input('identificador_de_cuenta');
		echo $this->Form->input('fecha');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('OnlineAccount.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('OnlineAccount.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Online Accounts', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses', true), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status', true), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
	</ul>
</div>