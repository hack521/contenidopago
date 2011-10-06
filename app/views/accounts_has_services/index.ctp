<div class="accountsHasServices index">
	<h2><?php __('SMS premium');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Cuenta');?></th>
			<th><?php echo $this->Paginator->sort('Prefijo');?></th>
			<th><?php echo $this->Paginator->sort('Numero Corto');?></th>
			<th><?php echo $this->Paginator->sort('Palabra');?></th>
			<th><?php echo $this->Paginator->sort('Saldo Actual');?></th>
			<th><?php echo $this->Paginator->sort('Saldo Anterior');?></th>
			<th><?php echo $this->Paginator->sort('Saldo Promedio');?></th>
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
		<td><?php echo $accountsHasService['Account']['numero_cuenta']; ?></td>
		<td>
			<?php echo $accountsHasService['Prefix']['numero']; ?>
		</td>
		<td>
			<?php echo $accountsHasService['ShortNumber']['numero']; ?>
		</td>
		<td><?php echo $accountsHasService['AccountsHasService']['palabra']; ?>&nbsp;</td>
		<td><?php echo $accountsHasService['AccountsHasService']['saldo_actual']; ?></td>
		<td><?php echo $accountsHasService['AccountsHasService']['saldo_anterior']; ?></td>
		<td><?php echo $accountsHasService['AccountsHasService']['saldo_promedio']; ?></td>
		<td><?php echo $accountsHasService['AccountsHasService']['created']; ?>&nbsp;</td>
		<td>
			<?php echo $accountsHasService['Status']['descripcion']; ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $accountsHasService['AccountsHasService']['id'])); ?>
			<?php echo $this->Html->link(__('Configurar', true), array('action' => 'edit', $accountsHasService['AccountsHasService']['id'])); ?>
			<?php echo $this->Html->link(__('Suspender', true), array('action' => 'delete', $accountsHasService['AccountsHasService']['id']), null, sprintf(__('¿Esta seguro que desea suspender este servicio?', true), $accountsHasService['AccountsHasService']['id'])); ?>
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