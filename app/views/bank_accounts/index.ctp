<div class="bankAccounts index">
	<h2><?php __('Cuentas Bancarias');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('banks_id');?></th>
			<th><?php echo $this->Paginator->sort('numero_cuenta');?></th>
			<th><?php echo $this->Paginator->sort('identificacion_beneficiario');?></th>
			<th><?php echo $this->Paginator->sort('beneficiario');?></th>
			<th><?php echo $this->Paginator->sort('status_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($bankAccounts as $bankAccount):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $bankAccount['Bank']['descripcion']; ?></td>
		<td><?php echo $bankAccount['BankAccount']['numero_cuenta']; ?>&nbsp;</td>
		<td><?php echo $bankAccount['BankAccount']['identificacion_beneficiario']; ?>&nbsp;</td>
		<td><?php echo $bankAccount['BankAccount']['beneficiario']; ?>&nbsp;</td>
		<td><?php echo $bankAccount['Status']['descripcion']; ?></td>
		<td><?php echo $bankAccount['BankAccount']['created']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $bankAccount['BankAccount']['id'])); ?>
			<?php echo $this->Html->link(__('Configurar', true), array('action' => 'edit', $bankAccount['BankAccount']['id'])); ?>
			<?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $bankAccount['BankAccount']['id']), null, sprintf(__('¿Esta seguro que desea borrar esta cuenta?', true), $bankAccount['BankAccount']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nueva Cuenta', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Volver', true), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
	</ul>
</div>