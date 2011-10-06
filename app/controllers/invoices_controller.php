<?php
class InvoicesController extends AppController {

	var $name = 'Invoices';

	function index() {
		$this->Invoice->recursive = 0;
		$this->set('invoices', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid invoice', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('invoice', $this->Invoice->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Invoice->create();
			if ($this->Invoice->save($this->data)) {
				$this->Session->setFlash(__('The invoice has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The invoice could not be saved. Please, try again.', true));
			}
		}
		$payments = $this->Invoice->Payment->find('list');
		$users = $this->Invoice->User->find('list');
		$admins = $this->Invoice->Admin->find('list');
		$paymentKinds = $this->Invoice->PaymentKind->find('list');
		$accounts = $this->Invoice->Account->find('list');
		$this->set(compact('payments', 'users', 'admins', 'paymentKinds', 'accounts'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid invoice', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Invoice->save($this->data)) {
				$this->Session->setFlash(__('The invoice has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The invoice could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Invoice->read(null, $id);
		}
		$payments = $this->Invoice->Payment->find('list');
		$users = $this->Invoice->User->find('list');
		$admins = $this->Invoice->Admin->find('list');
		$paymentKinds = $this->Invoice->PaymentKind->find('list');
		$accounts = $this->Invoice->Account->find('list');
		$this->set(compact('payments', 'users', 'admins', 'paymentKinds', 'accounts'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for invoice', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Invoice->delete($id)) {
			$this->Session->setFlash(__('Invoice deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Invoice was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function staff_index() {
		$this->Invoice->recursive = 0;
		$this->set('invoices', $this->paginate());
	}

	function staff_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid invoice', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('invoice', $this->Invoice->read(null, $id));
	}

	function staff_add() {
		if (!empty($this->data)) {
			$this->Invoice->create();
			if ($this->Invoice->save($this->data)) {
				$this->Session->setFlash(__('The invoice has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The invoice could not be saved. Please, try again.', true));
			}
		}
		$payments = $this->Invoice->Payment->find('list');
		$users = $this->Invoice->User->find('list');
		$admins = $this->Invoice->Admin->find('list');
		$paymentKinds = $this->Invoice->PaymentKind->find('list');
		$accounts = $this->Invoice->Account->find('list');
		$this->set(compact('payments', 'users', 'admins', 'paymentKinds', 'accounts'));
	}

	function staff_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid invoice', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Invoice->save($this->data)) {
				$this->Session->setFlash(__('The invoice has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The invoice could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Invoice->read(null, $id);
		}
		$payments = $this->Invoice->Payment->find('list');
		$users = $this->Invoice->User->find('list');
		$admins = $this->Invoice->Admin->find('list');
		$paymentKinds = $this->Invoice->PaymentKind->find('list');
		$accounts = $this->Invoice->Account->find('list');
		$this->set(compact('payments', 'users', 'admins', 'paymentKinds', 'accounts'));
	}

	function staff_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for invoice', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Invoice->delete($id)) {
			$this->Session->setFlash(__('Invoice deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Invoice was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
