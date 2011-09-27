<div class="messages index">
	<h2><?php __('Messages');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('users_id');?></th>
			<th><?php echo $this->Paginator->sort('asunto');?></th>
			<th><?php echo $this->Paginator->sort('destinatario');?></th>
			<th><?php echo $this->Paginator->sort('mensaje');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($messages as $message):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $message['Message']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($message['Users']['id'], array('controller' => 'users', 'action' => 'view', $message['Users']['id'])); ?>
		</td>
		<td><?php echo $message['Message']['asunto']; ?>&nbsp;</td>
		<td><?php echo $message['Message']['destinatario']; ?>&nbsp;</td>
		<td><?php echo $message['Message']['mensaje']; ?>&nbsp;</td>
		<td><?php echo $message['Message']['created']; ?>&nbsp;</td>
		<td><?php echo $message['Message']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $message['Message']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $message['Message']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $message['Message']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $message['Message']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Message', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>