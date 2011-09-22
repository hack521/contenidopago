<?php
/* Payment Fixture generated on: 2011-09-22 22:16:10 : 1316722570 */
class PaymentFixture extends CakeTestFixture {
	var $name = 'Payment';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'accounts_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'payment_kinds_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'currencies_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'status_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'monto' => array('type' => 'float', 'null' => false, 'default' => NULL),
		'costo_envio' => array('type' => 'float', 'null' => false, 'default' => NULL),
		'saldo_actual' => array('type' => 'float', 'null' => false, 'default' => NULL),
		'saldo_anterior' => array('type' => 'float', 'null' => false, 'default' => NULL),
		'autorizado_por' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'accounts_id', 'payment_kinds_id', 'currencies_id', 'status_id'), 'unique' => 1), 'fk_payments_accounts1' => array('column' => 'accounts_id', 'unique' => 0), 'fk_payments_payment_kinds1' => array('column' => 'payment_kinds_id', 'unique' => 0), 'fk_payments_currencies1' => array('column' => 'currencies_id', 'unique' => 0), 'fk_payments_status1' => array('column' => 'status_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'accounts_id' => 1,
			'payment_kinds_id' => 1,
			'currencies_id' => 1,
			'status_id' => 1,
			'monto' => 1,
			'costo_envio' => 1,
			'saldo_actual' => 1,
			'saldo_anterior' => 1,
			'autorizado_por' => 1,
			'created' => '2011-09-22 22:16:10',
			'modified' => '2011-09-22 22:16:10'
		),
	);
}
