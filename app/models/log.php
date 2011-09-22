<?php
class Log extends AppModel {
	var $name = 'Log';
	var $displayField = 'id';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Modules' => array(
			'className' => 'Modules',
			'foreignKey' => 'modules_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Usuario' => array(
			'className' => 'Usuario',
			'foreignKey' => 'usuario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Administrador' => array(
			'className' => 'Administrador',
			'foreignKey' => 'administrador_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
