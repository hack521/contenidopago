<div class="transferAccounts index">
	<h2><?php __('Transfer Accounts');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('countries_id');?></th>
			<th><?php echo $this->Paginator->sort('status_id');?></th>
			<th><?php echo $this->Paginator->sort('users_id');?></th>
			<th><?php echo $this->Paginator->sort('metodo_pago_id');?></th>
			<th><?php echo $this->Paginator->sort('identificacion');?></th>
			<th><?php echo $this->Paginator->sort('nombres_beneficiario');?></th>
			<th><?php echo $this->Paginator->sort('apellidos_beneficiario');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($transferAccounts as $transferAccount):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $transferAccount['TransferAccount']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($transferAccount['Countries']['id'], array('controller' => 'countries', 'action' => 'view', $transferAccount['Countries']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($transferAccount['Status']['descripcion'], array('controller' => 'statuses', 'action' => 'view', $transferAccount['Status']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($transferAccount['Users']['id'], array('controller' => 'users', 'action' => 'view', $transferAccount['Users']['id'])); ?>
		</td>
		<td><?php echo $transferAccount['TransferAccount']['metodo_pago_id']; ?>&nbsp;</td>
		<td><?php echo $transferAccount['TransferAccount']['identificacion']; ?>&nbsp;</td>
		<td><?php echo $transferAccount['TransferAccount']['nombres_beneficiario']; ?>&nbsp;</td>
		<td><?php echo $transferAccount['TransferAccount']['apellidos_beneficiario']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $transferAccount['TransferAccount']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $transferAccount['TransferAccount']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $transferAccount['TransferAccount']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $transferAccount['TransferAccount']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Transfer Account', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Countries', true), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Countries', true), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses', true), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status', true), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>