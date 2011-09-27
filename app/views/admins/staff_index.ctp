<div class="admins index">
	<h2><?php __('Admins');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('status_id');?></th>
			<th><?php echo $this->Paginator->sort('usuario');?></th>
			<th><?php echo $this->Paginator->sort('password');?></th>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th><?php echo $this->Paginator->sort('apellidos');?></th>
			<th><?php echo $this->Paginator->sort('telefono');?></th>
			<th><?php echo $this->Paginator->sort('celular');?></th>
			<th><?php echo $this->Paginator->sort('direccion');?></th>
			<th><?php echo $this->Paginator->sort('correo_electronico');?></th>
			<th><?php echo $this->Paginator->sort('correo_alternativo');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($admins as $admin):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $admin['Admin']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($admin['Status']['id'], array('controller' => 'statuses', 'action' => 'view', $admin['Status']['id'])); ?>
		</td>
		<td><?php echo $admin['Admin']['usuario']; ?>&nbsp;</td>
		<td><?php echo $admin['Admin']['password']; ?>&nbsp;</td>
		<td><?php echo $admin['Admin']['nombre']; ?>&nbsp;</td>
		<td><?php echo $admin['Admin']['apellidos']; ?>&nbsp;</td>
		<td><?php echo $admin['Admin']['telefono']; ?>&nbsp;</td>
		<td><?php echo $admin['Admin']['celular']; ?>&nbsp;</td>
		<td><?php echo $admin['Admin']['direccion']; ?>&nbsp;</td>
		<td><?php echo $admin['Admin']['correo_electronico']; ?>&nbsp;</td>
		<td><?php echo $admin['Admin']['correo_alternativo']; ?>&nbsp;</td>
		<td><?php echo $admin['Admin']['created']; ?>&nbsp;</td>
		<td><?php echo $admin['Admin']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $admin['Admin']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $admin['Admin']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $admin['Admin']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $admin['Admin']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Admin', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Statuses', true), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status', true), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
	</ul>
</div>