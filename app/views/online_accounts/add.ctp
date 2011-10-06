<div class="onlineAccounts form">
<?php echo $this->Form->create('OnlineAccount');?>
	<fieldset>
		<legend><?php __('Nueva Cuenta Online'); ?></legend>
	<?php
		echo $this->Form->input('payments_id');
		echo $this->Form->input('identificador_de_cuenta');
		echo $this->Form->input('descripcion');	
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