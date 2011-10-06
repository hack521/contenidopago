<div class="onlineAccounts index">
	<h2><?php __('Cuentas Online');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Descripcion');?></th>
			<th><?php echo $this->Paginator->sort('Metodo de Pago');?></th>
			<th><?php echo $this->Paginator->sort('identificador de cuenta');?></th>
			<th><?php echo $this->Paginator->sort('Estado');?></th>
			<th><?php echo $this->Paginator->sort('Fecha');?></th>
			<th class="actions"><?php __('Acciones');?></th>
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
		<td><?php echo $onlineAccount['OnlineAccount']['descripcion']; ?>&nbsp;</td>
		<td><?php echo $onlineAccount['PaymentKind']['descripcion']; ?>&nbsp;</td>
		<td><?php echo $onlineAccount['OnlineAccount']['identificador_de_cuenta']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($onlineAccount['Status']['descripcion'], array('controller' => 'statuses', 'action' => 'view', $onlineAccount['Status']['id'])); ?>
		</td>
		<td><?php echo $onlineAccount['OnlineAccount']['created']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $onlineAccount['OnlineAccount']['id'])); ?>
			<?php echo $this->Html->link(__('Configurar', true), array('action' => 'edit', $onlineAccount['OnlineAccount']['id'])); ?>
			<?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $onlineAccount['OnlineAccount']['id']), null, sprintf(__('¿Esta seguro que desea eliminar esta cuenta?', true), $onlineAccount['OnlineAccount']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nueva Cuenta Online', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Volver', true), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
	</ul>
</div>