<div class="accountsHasServices form">
<?php echo $this->Form->create('AccountsHasService');?>
	<fieldset>
		<legend><?php __('Configurar SmsPremium'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('accounts_id');
		echo $this->Form->input('prefixes_id');
		echo $this->Form->input('short_numbers_id');
		echo $this->Form->input('palabra');
		echo $this->Form->input('url_servicio');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Volver', true), array('action' => 'index'));?></li>
	</ul>
</div>