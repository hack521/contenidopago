<?php
class AccountsController extends AppController {

	var $name = 'Accounts';

	function index() {
		$this->Account->recursive = 0;
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
