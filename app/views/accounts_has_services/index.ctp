<div class="accountsHasServices index">
	<h2><?php __('SMS premium');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Cuenta');?></th>
			<th><?php echo $this->Paginator->sort('Prefijo');?></th>
			<th><?php echo $this->Paginator->sort('Numero Corto');?></th>
			<th><?php echo $this->Paginator->sort('Identificador');?></th>
			<th><?php echo $this->Paginator->sort('Palabra');?></th>
			<th><?php echo $this->Paginator->sort('Fecha');?></th>
			<th><?php echo $this->Paginator->sort('Estado');?></th>
			
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($accountsHasServices as $accountsHasService):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $this->Html->link($accountsHasService['Accounts']['id'], array('controller' => 'accounts', 'action' => 'view', $accountsHasService['Accounts']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($accountsHasService['Prefixes']['id'], array('controller' => 'prefixes', 'action' => 'view', $accountsHasService['Prefixes']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($accountsHasService['ShortNumbers']['id'], array('controller' => 'short_numbers', 'action' => 'view', $accountsHasService['ShortNumbers']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($accountsHasService['AccountIdentifier']['id'], array('controller' => 'account_identifiers', 'action' => 'view', $accountsHasService['AccountIdentifier']['id'])); ?>
		</td>
		
		<td><?php echo $accountsHasService['AccountsHasService']['palabra']; ?>&nbsp;</td>
		<td><?php echo $accountsHasService['AccountsHasService']['fecha']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($accountsHasService['Status']['id'], array('controller' => 'statuses', 'action' => 'view', $accountsHasService['Status']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $accountsHasService['AccountsHasService']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $accountsHasService['AccountsHasService']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $accountsHasService['AccountsHasService']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $accountsHasService['AccountsHasService']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nuevo SMS premium', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Volver', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
</div>