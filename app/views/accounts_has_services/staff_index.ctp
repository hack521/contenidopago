<div class="accountsHasServices index">
	<h2><?php __('Accounts Has Services');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('accounts_id');?></th>
			<th><?php echo $this->Paginator->sort('services_id');?></th>
			<th><?php echo $this->Paginator->sort('prefixes_id');?></th>
			<th><?php echo $this->Paginator->sort('short_numbers_id');?></th>
			<th><?php echo $this->Paginator->sort('account_identifier_id');?></th>
			<th><?php echo $this->Paginator->sort('currencies_id');?></th>
			<th><?php echo $this->Paginator->sort('status_id');?></th>
			<th><?php echo $this->Paginator->sort('palabra');?></th>
			<th><?php echo $this->Paginator->sort('comision');?></th>
			<th><?php echo $this->Paginator->sort('fecha');?></th>
			<th><?php echo $this->Paginator->sort('saldo_actual');?></th>
			<th><?php echo $this->Paginator->sort('saldo_anterior');?></th>
			<th><?php echo $this->Paginator->sort('saldo_promedio');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
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
		<td><?php echo $accountsHasService['AccountsHasService']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($accountsHasService['Accounts']['id'], array('controller' => 'accounts', 'action' => 'view', $accountsHasService['Accounts']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($accountsHasService['Services']['id'], array('controller' => 'services', 'action' => 'view', $accountsHasService['Services']['id'])); ?>
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
		<td>
			<?php echo $this->Html->link($accountsHasService['Currencies']['id'], array('controller' => 'currencies', 'action' => 'view', $accountsHasService['Currencies']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($accountsHasService['Status']['id'], array('controller' => 'statuses', 'action' => 'view', $accountsHasService['Status']['id'])); ?>
		</td>
		<td><?php echo $accountsHasService['AccountsHasService']['palabra']; ?>&nbsp;</td>
		<td><?php echo $accountsHasService['AccountsHasService']['comision']; ?>&nbsp;</td>
		<td><?php echo $accountsHasService['AccountsHasService']['fecha']; ?>&nbsp;</td>
		<td><?php echo $accountsHasService['AccountsHasService']['saldo_actual']; ?>&nbsp;</td>
		<td><?php echo $accountsHasService['AccountsHasService']['saldo_anterior']; ?>&nbsp;</td>
		<td><?php echo $accountsHasService['AccountsHasService']['saldo_promedio']; ?>&nbsp;</td>
		<td><?php echo $accountsHasService['AccountsHasService']['created']; ?>&nbsp;</td>
		<td><?php echo $accountsHasService['AccountsHasService']['modified']; ?>&nbsp;</td>
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
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Accounts Has Service', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Accounts', true), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accounts', true), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Services', true), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Services', true), array('controller' => 'services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Prefixes', true), array('controller' => 'prefixes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prefixes', true), array('controller' => 'prefixes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Short Numbers', true), array('controller' => 'short_numbers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Short Numbers', true), array('controller' => 'short_numbers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Account Identifiers', true), array('controller' => 'account_identifiers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account Identifier', true), array('controller' => 'account_identifiers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Currencies', true), array('controller' => 'currencies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currencies', true), array('controller' => 'currencies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses', true), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status', true), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
	</ul>
</div>