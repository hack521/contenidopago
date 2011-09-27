<div class="accounts index">
	<h2><?php __('Mis Cuentas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('numero_cuenta');?></th>
			<th><?php echo $this->Paginator->sort('descripcion');?></th>
			<th><?php echo $this->Paginator->sort('account_kinds_id');?></th>
			<th><?php echo $this->Paginator->sort('payment_kinds_id');?></th>
			<th><?php echo $this->Paginator->sort('status_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($accounts as $account):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $account['Account']['numero_cuenta']; ?>&nbsp;</td>
		<td><?php echo $account['Account']['descripcion']; ?>&nbsp;</td>
		<td><?php echo $account['AccountKind']['descripcion']; ?></td>
		<td><?php echo $account['PaymentKind']['descripcion']; ?></td>
		<td><?php echo $account['Status']['descripcion']; ?></td>
		<td><?php echo $account['Account']['created']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $account['Account']['id'])); ?>
			<?php echo $this->Html->link(__('Configurar', true), array('action' => 'edit', $account['Account']['id'])); ?>
			<?php echo $this->Html->link(__('Suspender', true), array('action' => 'delete', $account['Account']['id']), null, sprintf(__('¿Esta seguro que desea suspender esta cuenta?', true), $account['Account']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nueva Cuenta', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Volver', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
	</ul>
</div>