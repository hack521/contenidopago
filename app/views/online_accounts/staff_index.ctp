<div class="onlineAccounts index">
	<h2><?php __('Online Accounts');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('users_id');?></th>
			<th><?php echo $this->Paginator->sort('status_id');?></th>
			<th><?php echo $this->Paginator->sort('metodo_pago_id');?></th>
			<th><?php echo $this->Paginator->sort('identificador_de_cuenta');?></th>
			<th><?php echo $this->Paginator->sort('fecha');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($onlineAccounts as $onlineAccount):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $onlineAccount['OnlineAccount']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($onlineAccount['Users']['id'], array('controller' => 'users', 'action' => 'view', $onlineAccount['Users']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($onlineAccount['Status']['descripcion'], array('controller' => 'statuses', 'action' => 'view', $onlineAccount['Status']['id'])); ?>
		</td>
		<td><?php echo $onlineAccount['OnlineAccount']['metodo_pago_id']; ?>&nbsp;</td>
		<td><?php echo $onlineAccount['OnlineAccount']['identificador_de_cuenta']; ?>&nbsp;</td>
		<td><?php echo $onlineAccount['OnlineAccount']['fecha']; ?>&nbsp;</td>
		<td><?php echo $onlineAccount['OnlineAccount']['created']; ?>&nbsp;</td>
		<td><?php echo $onlineAccount['OnlineAccount']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $onlineAccount['OnlineAccount']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $onlineAccount['OnlineAccount']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $onlineAccount['OnlineAccount']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $onlineAccount['OnlineAccount']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Online Account', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses', true), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status', true), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
	</ul>
</div>