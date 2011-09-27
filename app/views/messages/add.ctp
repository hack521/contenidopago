<div class="messages form">
<?php echo $this->Form->create('Message');?>
	<fieldset>
		<legend><?php __('Nuevo Mensaje'); ?></legend>
	<?php
		echo $this->Form->input('asunto');
		echo $this->Form->input('mensaje');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Volver', true), array('action' => 'index'));?></li>
	</ul>
</div>