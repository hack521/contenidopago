<div class="shortNumbers index">
	<h2><?php __('Short Numbers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('countries_id');?></th>
			<th><?php echo $this->Paginator->sort('numero');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($shortNumbers as $shortNumber):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $shortNumber['ShortNumber']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($shortNumber['Countries']['id'], array('controller' => 'countries', 'action' => 'view', $shortNumber['Countries']['id'])); ?>
		</td>
		<td><?php echo $shortNumber['ShortNumber']['numero']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $shortNumber['ShortNumber']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $shortNumber['ShortNumber']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $shortNumber['ShortNumber']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $shortNumber['ShortNumber']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Short Number', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Countries', true), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Countries', true), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>