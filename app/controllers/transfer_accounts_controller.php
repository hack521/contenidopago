<?php
class TransferAccountsController extends AppController {

	var $name = 'TransferAccounts';

	function index() {
		$this->TransferAccount->recursive = 0;
		$this->set('transferAccounts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid transfer account', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('transferAccount', $this->TransferAccount->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->TransferAccount->create();
			if ($this->TransferAccount->save($this->data)) {
				$this->Session->setFlash(__('The transfer account has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transfer account could not be saved. Please, try again.', true));
			}
		}
		$countries = $this->TransferAccount->Country->find('list');
		$statuses = $this->TransferAccount->Status->find('list');
		$users = $this->TransferAccount->User->find('list');
		$this->set(compact('countries', 'statuses', 'users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid transfer account', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->TransferAccount->save($this->data)) {
				$this->Session->setFlash(__('The transfer account has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transfer account could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TransferAccount->read(null, $id);
		}
		$countries = $this->TransferAccount->Country->find('list');
		$statuses = $this->TransferAccount->Status->find('list');
		$users = $this->TransferAccount->User->find('list');
		$this->set(compact('countries', 'statuses', 'users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for transfer account', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TransferAccount->delete($id)) {
			$this->Session->setFlash(__('Transfer account deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Transfer account was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function staff_index() {
		$this->TransferAccount->recursive = 0;
		$this->set('transferAccounts', $this->paginate());
	}

	function staff_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid transfer account', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('transferAccount', $this->TransferAccount->read(null, $id));
	}

	function staff_add() {
		if (!empty($this->data)) {
			$this->TransferAccount->create();
			if ($this->TransferAccount->save($this->data)) {
				$this->Session->setFlash(__('The transfer account has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transfer account could not be saved. Please, try again.', true));
			}
		}
		$countries = $this->TransferAccount->Country->find('list');
		$statuses = $this->TransferAccount->Status->find('list');
		$users = $this->TransferAccount->User->find('list');
		$this->set(compact('countries', 'statuses', 'users'));
	}

	function staff_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid transfer account', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->TransferAccount->save($this->data)) {
				$this->Session->setFlash(__('The transfer account has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transfer account could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TransferAccount->read(null, $id);
		}
		$countries = $this->TransferAccount->Country->find('list');
		$statuses = $this->TransferAccount->Status->find('list');
		$users = $this->TransferAccount->User->find('list');
		$this->set(compact('countries', 'statuses', 'users'));
	}

	function staff_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for transfer account', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TransferAccount->delete($id)) {
			$this->Session->setFlash(__('Transfer account deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Transfer account was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
