<div class="accounts index">
	<h2><?php __('Accounts');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('users_id');?></th>
			<th><?php echo $this->Paginator->sort('account_kinds_id');?></th>
			<th><?php echo $this->Paginator->sort('status_id');?></th>
			<th><?php echo $this->Paginator->sort('payment_kinds_id');?></th>
			<th><?php echo $this->Paginator->sort('descripcion');?></th>
			<th><?php echo $this->Paginator->sort('numero_cuenta');?></th>
			<th><?php echo $this->Paginator->sort('cuenta_banco_defecto');?></th>
			<th><?php echo $this->Paginator->sort('cuenta_online_defecto');?></th>
			<th><?php echo $this->Paginator->sort('cuenta_transferencia_defecto');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($accounts as $account):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $account['Account']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($account['Users']['id'], array('controller' => 'users', 'action' => 'view', $account['Users']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($account['AccountKinds']['id'], array('controller' => 'account_kinds', 'action' => 'view', $account['AccountKinds']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($account['Status']['descripcion'], array('controller' => 'statuses', 'action' => 'view', $account['Status']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($account['PaymentKinds']['id'], array('controller' => 'payment_kinds', 'action' => 'view', $account['PaymentKinds']['id'])); ?>
		</td>
		<td><?php echo $account['Account']['descripcion']; ?>&nbsp;</td>
		<td><?php echo $account['Account']['numero_cuenta']; ?>&nbsp;</td>
		<td><?php echo $account['Account']['cuenta_banco_defecto']; ?>&nbsp;</td>
		<td><?php echo $account['Account']['cuenta_online_defecto']; ?>&nbsp;</td>
		<td><?php echo $account['Account']['cuenta_transferencia_defecto']; ?>&nbsp;</td>
		<td><?php echo $account['Account']['created']; ?>&nbsp;</td>
		<td><?php echo $account['Account']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $account['Account']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $account['Account']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $account['Account']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $account['Account']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Account', true), array('action' => 'add')); ?></li>
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