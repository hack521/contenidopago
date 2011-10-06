<script type="text/javascript" src="../js/jquery-1.6.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	clean_combos();
	$("#AccountsHasServiceCountriesId").change(function(){
		id = $("#AccountsHasServiceCountriesId").val();
		fill_combos(id);
	});
});

function clean_combos(){
	$("#AccountsHasServicePrefixesId").html("");
	$("#AccountsHasServiceShortNumbersId").html("");
	$("#AccountsHasServicePrefixesId").html("<option value='0'>--Seleccionar--</option>");
	$("#AccountsHasServiceShortNumbersId").html("<option value='0'>--Seleccionar--</option>");
}

function fill_combos(id){
	$("#AccountsHasServicePrefixesId").html("Cargando...");
	$.ajax({
                    type: 'POST',
                    url: '../Prefixes/list_combo/' + id,
                    success: function(data) {
                    	$("#AccountsHasServicePrefixesId").html("");
                        $("#AccountsHasServicePrefixesId").html(data);
                    },
                    failure: function() {
                        //display_info(2, 'La Historia no pudo ser eliminada.');
                    }
                });
   $("#UserRegionId").html("Cargando...");
	$.ajax({
                    type: 'POST',
                    url: '../ShortNumbers/list_combo/' + id,
                    success: function(data) {
                    	$("#AccountsHasServiceShortNumbersId").html("");
                        $("#AccountsHasServiceShortNumbersId").html(data);
                    },
                    failure: function() {
                        //display_info(2, 'La Historia no pudo ser eliminada.');
                    }
                });
}

</script>
<div class="accountsHasServices form">
<?php echo $this->Form->create('AccountsHasService');?>
	<fieldset>
		<legend><?php __('Nuevo SMS premium'); ?></legend>
	<?php
		echo $this->Form->input('accounts_id');
		echo $this->Form->input('countries_id', array('options' => $countries, 'empty' => '-- Seleccionar --'), null, array('id' => 'countries_id', 'label' => 'Country'));
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
		<li><?php echo $this->Html->link(__('Volver', true), array('action' => 'index')); ?> </li>
		<!--
		<li><?php echo $this->Html->link(__('List Accounts Has Services', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Accounts', true), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accounts', true), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Services', true), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Services', true), array('controller' => 'services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Prefixes', true), array('controller' => 'prefixes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prefixes', true), array('controller' => 'prefixes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Short Numbers', true), array('controller' => 'short_numbers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Short Numbers', true), array('controller' => 'short_numbers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Account Identifiers', true), array('controller' => 'account_identifiers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account Identifier', true), array('controller' => 'account_identifiers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Currencies', true), array('controller' => 'currencies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currencies', true), array('controller' => 'currencies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses', true), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status', true), array('controller' => 'statuses', 'action' => 'add')); ?> </li>-->
	</ul>
</div>