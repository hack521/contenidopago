<?php
class AccountsController extends AppController {

	var $name = 'Accounts';
	var $uses = array('Account', 'BankAccount', 'OnlineAccount', 'TransferAccount');

	function index() {
		$id = $this->Auth->user("id");

		//$conditions = array('1=1 GROUP BY Transaction.id');
		//$fields = array('SUM(TransactionItem.amount) as amount', 'Transaction.title'))
		//$results = $this->TransactionItem->find('all', compact('conditions', 'fields'));  

		$this->Account->find('all', array('conditions' => array('Account.users_id' => $id)));

		$conditions = "Account.users_id = ".$id;
		$this->paginate = array('limit' => 20,'conditions' => $conditions);
		$this->set('accounts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid account', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('account', $this->Account->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {

			if(!empty($this->data["Account"]["bank_accounts_id"])){
				$this->data["Account"]["cuenta_banco_defecto"] = $this->data["Account"]["bank_accounts_id"];
			}

			if(!empty($this->data["Account"]["online_accounts_id"])){
				$this->data["Account"]["cuenta_online_defecto"] = $this->data["Account"]["online_accounts_id"];
			}

			if(!empty($this->data["Account"]["transfer_accounts_id"])){
				$this->data["Account"]["cuenta_transferencia_defecto"] = $this->data["Account"]["transfer_accounts_id"];
			}

			$this->data["Account"]["users_id"] = $this->Auth->user("id");
			$this->data["Account"]["status_id"] = 8;
			$this->data["Account"]["account_kinds_id"] = 1;

			$this->Account->create();
			if ($this->Account->save($this->data)) {
				$this->Session->setFlash(__('La Cuenta Ha sido guardada.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The account could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Account->User->find('list');
		$accountKinds = $this->Account->AccountKind->find('list');
		$statuses = $this->Account->Status->find('list');
		$paymentKinds = $this->Account->PaymentKind->find('list');

		$id = $this->Auth->user("id");
		$bankAccounts = $this->BankAccount->find('list', array('conditions' => array('BankAccount.users_id' => $id)));
		$onlineAccounts = $this->OnlineAccount->find('list', array('conditions' => array('OnlineAccount.users_id' => $id)));
		$transferAccounts = $this->TransferAccount->find('list', array('conditions' => array('TransferAccount.users_id' => $id)));


		$this->set(compact('users', 'accountKinds', 'statuses', 'paymentKinds', 'bankAccounts', 'onlineAccounts', 'transferAccounts'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid account', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Account->save($this->data)) {
				$this->Session->setFlash(__('The account has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The account could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Account->read(null, $id);
		}
		$users = $this->Account->User->find('list');
		$accountKinds = $this->Account->AccountKind->find('list');
		$statuses = $this->Account->Status->find('list');
		$paymentKinds = $this->Account->PaymentKind->find('list');
		$this->set(compact('users', 'accountKinds', 'statuses', 'paymentKinds'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for account', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Account->delete($id)) {
			$this->Session->setFlash(__('Account deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Account was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function staff_index() {
		$this->Account->recursive = 0;
		$this->set('accounts', $this->paginate());
	}

	function staff_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid account', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('account', $this->Account->read(null, $id));
	}

	function staff_add() {
		if (!empty($this->data)) {
			$this->Account->create();
			if ($this->Account->save($this->data)) {
				$this->Session->setFlash(__('The account has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The account could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Account->User->find('list');
		$accountKinds = $this->Account->AccountKind->find('list');
		$statuses = $this->Account->Status->find('list');
		$paymentKinds = $this->Account->PaymentKind->find('list');
		$this->set(compact('users', 'accountKinds', 'statuses', 'paymentKinds'));
	}

	function staff_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid account', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Account->save($this->data)) {
				$this->Session->setFlash(__('The account has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The account could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Account->read(null, $id);
		}
		$users = $this->Account->User->find('list');
		$accountKinds = $this->Account->AccountKind->find('list');
		$statuses = $this->Account->Status->find('list');
		$paymentKinds = $this->Account->PaymentKind->find('list');
		$this->set(compact('users', 'accountKinds', 'statuses', 'paymentKinds'));
	}

	function staff_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for account', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Account->delete($id)) {
			$this->Session->setFlash(__('Account deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Account was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
