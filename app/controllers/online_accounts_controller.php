<?php
class OnlineAccountsController extends AppController {

	var $name = 'OnlineAccounts';
	var $uses = array('OnlineAccount', 'PaymentKind');

	function index() {
		$this->OnlineAccount->recursive = 0;
		$this->set('onlineAccounts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid online account', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('onlineAccount', $this->OnlineAccount->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$id = $this->Auth->user("id");
			$this->data["OnlineAccount"]["users_id"] = $id;
			$this->data["OnlineAccount"]["status_id"] = 1;
			$this->data["OnlineAccount"]["metodo_pago_id"] = $this->data["OnlineAccount"]["payments_id"];
			$this->OnlineAccount->create();
			if ($this->OnlineAccount->save($this->data)) {
				$this->Session->setFlash(__('La Cuenta Online ha sido guardada.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La Cuenta Online no ha sido guardada, intentelo de nuevo.', true));
			}
		}
		$users = $this->OnlineAccount->User->find('list');
		$statuses = $this->OnlineAccount->Status->find('list');
		$payments = $this->PaymentKind->find('list', array('conditions' => array('PaymentKind.tipo' => '2')));
		$this->set(compact('users', 'statuses', 'payments'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid online account', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->OnlineAccount->save($this->data)) {
				$this->Session->setFlash(__('La Cuenta Online ha sido guardada.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La Cuenta Online no se pudo guardar, intentelo de nuevo.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->OnlineAccount->read(null, $id);
		}
		$users = $this->OnlineAccount->User->find('list');
		$statuses = $this->OnlineAccount->Status->find('list');
		$this->set(compact('users', 'statuses'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for online account', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->OnlineAccount->delete($id)) {
			$this->Session->setFlash(__('La Cuenta Online ha sido eliminada.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('La Cuenta Online no pudo ser eliminada.', true));
		$this->redirect(array('action' => 'index'));
	}

	function staff_index() {
		$this->OnlineAccount->recursive = 0;
		$this->set('onlineAccounts', $this->paginate());
	}

	function staff_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid online account', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('onlineAccount', $this->OnlineAccount->read(null, $id));
	}

	function staff_add() {
		if (!empty($this->data)) {
			$this->OnlineAccount->create();
			if ($this->OnlineAccount->save($this->data)) {
				$this->Session->setFlash(__('The online account has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The online account could not be saved. Please, try again.', true));
			}
		}
		$users = $this->OnlineAccount->User->find('list');
		$statuses = $this->OnlineAccount->Status->find('list');
		$this->set(compact('users', 'statuses'));
	}

	function staff_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid online account', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->OnlineAccount->save($this->data)) {
				$this->Session->setFlash(__('The online account has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The online account could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->OnlineAccount->read(null, $id);
		}
		$users = $this->OnlineAccount->User->find('list');
		$statuses = $this->OnlineAccount->Status->find('list');
		$this->set(compact('users', 'statuses'));
	}

	function staff_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for online account', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->OnlineAccount->delete($id)) {
			$this->Session->setFlash(__('Online account deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Online account was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
