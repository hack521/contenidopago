<div class="users index">
<h2><?php __('Bienvenido Javier ') ?></h2>
</div>
<!--<div class="users index">
	<h2><?php __('Bienvenido Javier');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('countries_id');?></th>
			<th><?php echo $this->Paginator->sort('region_id');?></th>
			<th><?php echo $this->Paginator->sort('ciudades_id');?></th>
			<th><?php echo $this->Paginator->sort('status_id');?></th>
			<th><?php echo $this->Paginator->sort('usuario');?></th>
			<th><?php echo $this->Paginator->sort('password');?></th>
			<th><?php echo $this->Paginator->sort('identificacion');?></th>
			<th><?php echo $this->Paginator->sort('nombres');?></th>
			<th><?php echo $this->Paginator->sort('apellidos');?></th>
			<th><?php echo $this->Paginator->sort('empresa');?></th>
			<th><?php echo $this->Paginator->sort('telefono');?></th>
			<th><?php echo $this->Paginator->sort('celular');?></th>
			<th><?php echo $this->Paginator->sort('direccion');?></th>
			<th><?php echo $this->Paginator->sort('direccion_alt');?></th>
			<th><?php echo $this->Paginator->sort('codigo_postal');?></th>
			<th><?php echo $this->Paginator->sort('correo_electronico');?></th>
			<th><?php echo $this->Paginator->sort('correo_alternativo');?></th>
			<th><?php echo $this->Paginator->sort('facebook');?></th>
			<th><?php echo $this->Paginator->sort('twitter');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($users as $user):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $user['User']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($user['Countries']['id'], array('controller' => 'countries', 'action' => 'view', $user['Countries']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($user['Region']['id'], array('controller' => 'regions', 'action' => 'view', $user['Region']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($user['City']['id'], array('controller' => 'cities', 'action' => 'view', $user['City']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($user['Status']['id'], array('controller' => 'statuses', 'action' => 'view', $user['Status']['id'])); ?>
		</td>
		<td><?php echo $user['User']['usuario']; ?>&nbsp;</td>
		<td><?php echo $user['User']['password']; ?>&nbsp;</td>
		<td><?php echo $user['User']['identificacion']; ?>&nbsp;</td>
		<td><?php echo $user['User']['nombres']; ?>&nbsp;</td>
		<td><?php echo $user['User']['apellidos']; ?>&nbsp;</td>
		<td><?php echo $user['User']['empresa']; ?>&nbsp;</td>
		<td><?php echo $user['User']['telefono']; ?>&nbsp;</td>
		<td><?php echo $user['User']['celular']; ?>&nbsp;</td>
		<td><?php echo $user['User']['direccion']; ?>&nbsp;</td>
		<td><?php echo $user['User']['direccion_alt']; ?>&nbsp;</td>
		<td><?php echo $user['User']['codigo_postal']; ?>&nbsp;</td>
		<td><?php echo $user['User']['correo_electronico']; ?>&nbsp;</td>
		<td><?php echo $user['User']['correo_alternativo']; ?>&nbsp;</td>
		<td><?php echo $user['User']['facebook']; ?>&nbsp;</td>
		<td><?php echo $user['User']['twitter']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?>
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
-->
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Mis SMS premium', true), array('controller' => 'AccountsHasServices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Mis Cuentas', true), array('controller' => 'Accounts', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Mi Perfil', true), array('controller' => 'Users', 'action' => 'profile')); ?> </li>
        <li><?php echo $this->Html->link(__('Mensajeria', true), array('controller' => 'Messages', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Estadisticas', true), array('controller' => 'Users', 'action' => 'index')); ?> </li>

		<!--<li><?php echo $this->Html->link(__('New User', true), array('action' => 'add')); ?></li>-->
		<!--<li><?php echo $this->Html->link(__('List Countries', true), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Countries', true), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Regions', true), array('controller' => 'regions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Region', true), array('controller' => 'regions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities', true), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City', true), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses', true), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status', true), array('controller' => 'statuses', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Salir', true), array('action' => 'logout')); ?></li>
	</ul>
</div>