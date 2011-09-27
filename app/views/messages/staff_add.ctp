<div class="messages form">
<?php echo $this->Form->create('Message');?>
	<fieldset>
		<legend><?php __('Staff Add Message'); ?></legend>
	<?php
		echo $this->Form->input('users_id');
		echo $this->Form->input('asunto');
		echo $this->Form->input('destinatario');
		echo $this->Form->input('mensaje');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Messages', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>