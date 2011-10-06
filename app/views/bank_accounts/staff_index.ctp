<div class="bankAccounts index">
	<h2><?php __('Bank Accounts');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('banks_id');?></th>
			<th><?php echo $this->Paginator->sort('status_id');?></th>
			<th><?php echo $this->Paginator->sort('users_id');?></th>
			<th><?php echo $this->Paginator->sort('numero_cuenta');?></th>
			<th><?php echo $this->Paginator->sort('identificacion_beneficiario');?></th>
			<th><?php echo $this->Paginator->sort('beneficiario');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($bankAccounts as $bankAccount):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $bankAccount['BankAccount']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bankAccount['Banks']['id'], array('controller' => 'banks', 'action' => 'view', $bankAccount['Banks']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($bankAccount['Status']['descripcion'], array('controller' => 'statuses', 'action' => 'view', $bankAccount['Status']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($bankAccount['Users']['id'], array('controller' => 'users', 'action' => 'view', $bankAccount['Users']['id'])); ?>
		</td>
		<td><?php echo $bankAccount['BankAccount']['numero_cuenta']; ?>&nbsp;</td>
		<td><?php echo $bankAccount['BankAccount']['identificacion_beneficiario']; ?>&nbsp;</td>
		<td><?php echo $bankAccount['BankAccount']['beneficiario']; ?>&nbsp;</td>
		<td><?php echo $bankAccount['BankAccount']['created']; ?>&nbsp;</td>
		<td><?php echo $bankAccount['BankAccount']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $bankAccount['BankAccount']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $bankAccount['BankAccount']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $bankAccount['BankAccount']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $bankAccount['BankAccount']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Bank Account', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Banks', true), array('controller' => 'banks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Banks', true), array('controller' => 'banks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses', true), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status', true), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>