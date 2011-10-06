<?php
class BankAccountsController extends AppController {

	var $name = 'BankAccounts';
	var $components = array('Auth');
	var $uses = array('BankAccount', 'Country');

	function index() {
		$this->BankAccount->recursive = 0;
		$id = $this->Auth->user("id");
		$conditions = "BankAccount.users_id = ".$id;
		$this->paginate = array('limit' => 20,'conditions' => $conditions);
		$this->set('bankAccounts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid bank account', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('bankAccount', $this->BankAccount->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->data["BankAccount"]["users_id"] = $this->Auth->user("id");
			$this->data["BankAccount"]["status_id"] = 1;
			$this->BankAccount->create();
			if ($this->BankAccount->save($this->data)) {
				$this->Session->setFlash(__('La Cuenta Bancaria ha sido guardada.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bank account could not be saved. Please, try again.', true));
			}
		}
		$banks = $this->BankAccount->Bank->find('list');
		$statuses = $this->BankAccount->Status->find('list');
		$users = $this->BankAccount->User->find('list');
		$countries = $this->Country->find('list');
		$this->set(compact('banks', 'statuses', 'users', 'countries'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid bank account', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->BankAccount->save($this->data)) {
				$this->Session->setFlash(__('La Cuenta Bancaria ha sido guardada.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La cuenta bancaria no pudo ser guardada, por favor intentelo de nuevo.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BankAccount->read(null, $id);
		}
		$banks = $this->BankAccount->Bank->find('list');
		$statuses = $this->BankAccount->Status->find('list');
		$users = $this->BankAccount->User->find('list');
		$this->set(compact('banks', 'statuses', 'users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for bank account', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BankAccount->delete($id)) {
			$this->Session->setFlash(__('La Cuenta Bancaria ha sido borrada.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('La Cuenta Bancaria no pude ser borrada.', true));
		$this->redirect(array('action' => 'index'));
	}

	function staff_index() {
		$this->BankAccount->recursive = 0;
		$this->set('bankAccounts', $this->paginate());
	}

	function staff_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid bank account', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('bankAccount', $this->BankAccount->read(null, $id));
	}

	function staff_add() {
		if (!empty($this->data)) {
			$this->BankAccount->create();
			if ($this->BankAccount->save($this->data)) {
				$this->Session->setFlash(__('The bank account has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bank account could not be saved. Please, try again.', true));
			}
		}
		$banks = $this->BankAccount->Bank->find('list');
		$statuses = $this->BankAccount->Status->find('list');
		$users = $this->BankAccount->User->find('list');
		$this->set(compact('banks', 'statuses', 'users'));
	}

	function staff_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid bank account', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->BankAccount->save($this->data)) {
				$this->Session->setFlash(__('The bank account has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bank account could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BankAccount->read(null, $id);
		}
		$banks = $this->BankAccount->Bank->find('list');
		$statuses = $this->BankAccount->Status->find('list');
		$users = $this->BankAccount->User->find('list');
		$this->set(compact('banks', 'statuses', 'users'));
	}

	function staff_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for bank account', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BankAccount->delete($id)) {
			$this->Session->setFlash(__('Bank account deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Bank account was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
