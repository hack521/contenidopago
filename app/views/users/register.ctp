<script type="text/javascript" src="../js/jquery-1.6.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	clean_combos();
	$("#UserCountriesId").change(function(){
		id = $("#UserCountriesId").val();
		select_regions(id);
	});
	$("#UserRegionId").change(function(){
		id = $("#UserRegionId").val();
		select_cities(id);
	});
});

function clean_combos(){
	$("#UserRegionId").html("");
	$("#UserCiudadesId").html("");
	$("#UserRegionId").html("<option value='0'>--Seleccionar--</option>");
	$("#UserCiudadesId").html("<option value='0'>--Seleccionar--</option>");
}

function select_regions(id){
	$("#UserRegionId").html("Cargando...");
	$.ajax({
                    type: 'POST',
                    url: '../regions/list_combo/' + id,
                    success: function(data) {
                    	$("#UserRegionId").html("");
                        $("#UserRegionId").html(data);
                    },
                    failure: function() {
                        //display_info(2, 'La Historia no pudo ser eliminada.');
                    }
                });
}

function select_cities(id){
	$("#UserCiudadesId").html("Cargando...");
	$.ajax({
                    type: 'POST',
                    url: '../cities/list_combo/' + id,
                    success: function(data) {
                    	$("#UserCiudadesId").html("");
                        $("#UserCiudadesId").html(data);
                    },
                    failure: function() {
                        //display_info(2, 'La Historia no pudo ser eliminada.');
                    }
                });
}

</script>
<div class="users form">
<?php echo $this->Form->create('User', array('action' => 'register'));?>
	<br/>
	<h2><?php __('Registro de Usuarios') ?></h2>
	<br/>
	<br/>
	<fieldset>
		<legend><?php __('Datos Personales'); ?></legend>
	<?php
		echo $this->Form->input('identificacion');
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('telefono');
		echo $this->Form->input('celular');
		echo $this->Form->input('direccion');
		echo $this->Form->input('codigo_postal');
	?>
		</fieldset>
		<fieldset>
			<legend><?php __('Pais de Residencia'); ?></legend>
			<?php
				echo $this->Form->input('countries_id', array('options' => $countries, 'empty' => '-- Seleccionar --'), null, array('id' => 'countries_id', 'label' => 'Country'));
				echo $this->Form->input('region_id', array('options' => $regions, 'empty' => '-- Seleccionar --'), null, array('id' => 'region_id', 'label' => 'Country'));
				echo $this->Form->input('ciudades_id', array('options' => $cities, 'empty' => '-- Seleccionar --'), null, array('id' => 'ciudades_id', 'label' => 'Country'));
			?>
		</fieldset>
		<fieldset>
			<legend><?php __('Datos de registro'); ?></legend>
			<?php
				echo $this->Form->input('usuario');
				echo $this->Form->input('password');
				//echo $form->input('password_confirm', array('type' => 'password'));
			?>
		</fieldset>
	<?php echo $this->Form->end(__('Enviar', true)); ?>
</div>