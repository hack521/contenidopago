<div class="invoices index">
	<h2><?php __('Invoices');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('payments_id');?></th>
			<th><?php echo $this->Paginator->sort('users_id');?></th>
			<th><?php echo $this->Paginator->sort('administradores_id');?></th>
			<th><?php echo $this->Paginator->sort('payment_kinds_id');?></th>
			<th><?php echo $this->Paginator->sort('accounts_id');?></th>
			<th><?php echo $this->Paginator->sort('codigo_factura');?></th>
			<th><?php echo $this->Paginator->sort('fecha');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($invoices as $invoice):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $invoice['Invoice']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($invoice['Payments']['id'], array('controller' => 'payments', 'action' => 'view', $invoice['Payments']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($invoice['Users']['id'], array('controller' => 'users', 'action' => 'view', $invoice['Users']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($invoice['Admin']['id'], array('controller' => 'admins', 'action' => 'view', $invoice['Admin']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($invoice['PaymentKinds']['id'], array('controller' => 'payment_kinds', 'action' => 'view', $invoice['PaymentKinds']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($invoice['Accounts']['id'], array('controller' => 'accounts', 'action' => 'view', $invoice['Accounts']['id'])); ?>
		</td>
		<td><?php echo $invoice['Invoice']['codigo_factura']; ?>&nbsp;</td>
		<td><?php echo $invoice['Invoice']['fecha']; ?>&nbsp;</td>
		<td><?php echo $invoice['Invoice']['created']; ?>&nbsp;</td>
		<td><?php echo $invoice['Invoice']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $invoice['Invoice']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $invoice['Invoice']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $invoice['Invoice']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $invoice['Invoice']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Invoice', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Payments', true), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payments', true), array('controller' => 'payments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Admins', true), array('controller' => 'admins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Admin', true), array('controller' => 'admins', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Kinds', true), array('controller' => 'payment_kinds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Kinds', true), array('controller' => 'payment_kinds', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts', true), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accounts', true), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>