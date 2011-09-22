<?php
/* Invoice Fixture generated on: 2011-09-22 21:59:06 : 1316721546 */
class InvoiceFixture extends CakeTestFixture {
	var $name = 'Invoice';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'payments_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'users_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'administradores_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'payment_kinds_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'accounts_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'codigo_factura' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fecha' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'payments_id', 'users_id', 'administradores_id', 'payment_kinds_id', 'accounts_id'), 'unique' => 1), 'fk_invoices_payments1' => array('column' => 'payments_id', 'unique' => 0), 'fk_invoices_users1' => array('column' => 'users_id', 'unique' => 0), 'fk_invoices_administradores1' => array('column' => 'administradores_id', 'unique' => 0), 'fk_invoices_payment_kinds1' => array('column' => 'payment_kinds_id', 'unique' => 0), 'fk_invoices_accounts1' => array('column' => 'accounts_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'payments_id' => 1,
			'users_id' => 1,
			'administradores_id' => 1,
			'payment_kinds_id' => 1,
			'accounts_id' => 1,
			'codigo_factura' => 'Lorem ipsum dolor sit amet',
			'fecha' => '2011-09-22 21:59:06',
			'created' => 1,
			'modified' => 1
		),
	);
}
