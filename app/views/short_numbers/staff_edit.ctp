<div class="shortNumbers form">
<?php echo $this->Form->create('ShortNumber');?>
	<fieldset>
		<legend><?php __('Staff Edit Short Number'); ?></legend>
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('ShortNumber.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('ShortNumber.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Short Numbers', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Countries', true), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Countries', true), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>