<div class="regions view">
<h2><?php  __('Region');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $region['Region']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descripcion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $region['Region']['descripcion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Countries'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($region['Countries']['id'], array('controller' => 'countries', 'action' => 'view', $region['Countries']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Region', true), array('action' => 'edit', $region['Region']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Region', true), array('action' => 'delete', $region['Region']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $region['Region']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Regions', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Region', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries', true), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Countries', true), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities', true), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City', true), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Cities');?></h3>
	<?php if (!empty($region['City'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Descripcion'); ?></th>
		<th><?php __('Region Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($region['City'] as $city):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $city['id'];?></td>
			<td><?php echo $city['descripcion'];?></td>
			<td><?php echo $city['region_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'cities', 'action' => 'view', $city['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'cities', 'action' => 'edit', $city['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'cities', 'action' => 'delete', $city['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $city['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New City', true), array('controller' => 'cities', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Users');?></h3>
	<?php if (!empty($region['User'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Countries Id'); ?></th>
		<th><?php __('Region Id'); ?></th>
		<th><?php __('Ciudades Id'); ?></th>
		<th><?php __('Status Id'); ?></th>
		<th><?php __('Usuario'); ?></th>
		<th><?php __('Password'); ?></th>
		<th><?php __('Identificacion'); ?></th>
		<th><?php __('Nombres'); ?></th>
		<th><?php __('Apellidos'); ?></th>
		<th><?php __('Telefono'); ?></th>
		<th><?php __('Celular'); ?></th>
		<th><?php __('Direccion'); ?></th>
		<th><?php __('Direccion Alt'); ?></th>
		<th><?php __('Codigo Postal'); ?></th>
		<th><?php __('Correo Electronico'); ?></th>
		<th><?php __('Correo Alternativo'); ?></th>
		<th><?php __('Facebook'); ?></th>
		<th><?php __('Twitter'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($region['User'] as $user):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $user['id'];?></td>
			<td><?php echo $user['countries_id'];?></td>
			<td><?php echo $user['region_id'];?></td>
			<td><?php echo $user['ciudades_id'];?></td>
			<td><?php echo $user['status_id'];?></td>
			<td><?php echo $user['usuario'];?></td>
			<td><?php echo $user['password'];?></td>
			<td><?php echo $user['identificacion'];?></td>
			<td><?php echo $user['nombres'];?></td>
			<td><?php echo $user['apellidos'];?></td>
			<td><?php echo $user['telefono'];?></td>
			<td><?php echo $user['celular'];?></td>
			<td><?php echo $user['direccion'];?></td>
			<td><?php echo $user['direccion_alt'];?></td>
			<td><?php echo $user['codigo_postal'];?></td>
			<td><?php echo $user['correo_electronico'];?></td>
			<td><?php echo $user['correo_alternativo'];?></td>
			<td><?php echo $user['facebook'];?></td>
			<td><?php echo $user['twitter'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'users', 'action' => 'delete', $user['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
