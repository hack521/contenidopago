<div class="shortNumbers view">
<h2><?php  __('Short Number');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $shortNumber['ShortNumber']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Countries'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($shortNumber['Countries']['id'], array('controller' => 'countries', 'action' => 'view', $shortNumber['Countries']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Numero'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $shortNumber['ShortNumber']['numero']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Short Number', true), array('action' => 'edit', $shortNumber['ShortNumber']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Short Number', true), array('action' => 'delete', $shortNumber['ShortNumber']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $shortNumber['ShortNumber']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Short Numbers', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Short Number', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries', true), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Countries', true), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>
