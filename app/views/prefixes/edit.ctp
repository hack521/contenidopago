<div class="prefixes form">
<?php echo $this->Form->create('Prefix');?>
	<fieldset>
		<legend><?php __('Edit Prefix'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('countries_id');
		echo $this->Form->input('numero');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Prefix.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Prefix.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Prefixes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Countries', true), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Countries', true), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>