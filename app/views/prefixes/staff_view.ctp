<div class="prefixes view">
<h2><?php  __('Prefix');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $prefix['Prefix']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Countries'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($prefix['Countries']['id'], array('controller' => 'countries', 'action' => 'view', $prefix['Countries']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Numero'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $prefix['Prefix']['numero']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Prefix', true), array('action' => 'edit', $prefix['Prefix']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Prefix', true), array('action' => 'delete', $prefix['Prefix']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $prefix['Prefix']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Prefixes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prefix', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries', true), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Countries', true), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>
