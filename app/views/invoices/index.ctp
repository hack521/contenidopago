<div class="invoices index">
	<h2><?php __('Facturas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('codigo_factura');?></th>
			<th><?php echo $this->Paginator->sort('payments_id');?></th>
			<th><?php echo $this->Paginator->sort('payment_kinds_id');?></th>
			<th><?php echo $this->Paginator->sort('accounts_id');?></th>
			<th><?php echo $this->Paginator->sort('fecha');?></th>
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
		<td><?php echo $invoice['Invoice']['codigo_factura']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($invoice['Payments']['id'], array('controller' => 'payments', 'action' => 'view', $invoice['Payments']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($invoice['PaymentKinds']['id'], array('controller' => 'payment_kinds', 'action' => 'view', $invoice['PaymentKinds']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($invoice['Accounts']['id'], array('controller' => 'accounts', 'action' => 'view', $invoice['Accounts']['id'])); ?>
		</td>
		<td><?php echo $invoice['Invoice']['fecha']; ?>&nbsp;</td>
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
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Volver', true), array('controller' => 'Users', 'action' => 'index')); ?> </li>
	</ul>
</div>