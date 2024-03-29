<?php
class AccountsHasServicesController extends AppController {

	var $name = 'AccountsHasServices';
	var $uses = array('AccountsHasService', 'Country');

	function index() {
		$this->AccountsHasService->recursive = 0;
		$id = $this->Auth->user("id");
		$conditions = "Account.users_id = ".$id;
		$this->paginate = array('limit' => 20,'conditions' => $conditions);
		$this->set('accountsHasServices', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid accounts has service', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('accountsHasService', $this->AccountsHasService->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->data["AccountsHasService"]["services_id"] = 1;
			$this->data["AccountsHasService"]["currencies_id"] = 5;
			$this->data["AccountsHasService"]["status_id"] = 1;
			
			$this->AccountsHasService->create();
			if ($this->AccountsHasService->save($this->data)) {
				$this->Session->setFlash(__('El SmsPremium ha sido guardado correctamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The accounts has service could not be saved. Please, try again.', true));
			}
		}

		$id = $this->Auth->user("id");
		$accounts = $this->AccountsHasService->Account->find('list', array('conditions' => array('Account.users_id' => $id)));
		$services = $this->AccountsHasService->Service->find('list');
		$prefixes = $this->AccountsHasService->Prefix->find('list');
		$shortNumbers = $this->AccountsHasService->ShortNumber->find('list');
		$currencies = $this->AccountsHasService->Currency->find('list');
		$statuses = $this->AccountsHasService->Status->find('list');
		$countries = $this->Country->find('list');
		$this->set(compact('accounts', 'services', 'prefixes', 'shortNumbers', 'currencies', 'statuses', 'countries'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid accounts has service', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->AccountsHasService->save($this->data)) {
				$this->Session->setFlash(__('El SmsPremium ha sido configurado.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El SmsPremium no pudo ser guardado, Intentelo de nuevo.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AccountsHasService->read(null, $id);
		}
		$accounts = $this->AccountsHasService->Account->find('list');
		$services = $this->AccountsHasService->Service->find('list');
		$prefixes = $this->AccountsHasService->Prefix->find('list');
		$shortNumbers = $this->AccountsHasService->ShortNumber->find('list');
		$currencies = $this->AccountsHasService->Currency->find('list');
		$statuses = $this->AccountsHasService->Status->find('list');
		$this->set(compact('accounts', 'services', 'prefixes', 'shortNumbers', 'accountIdentifiers', 'currencies', 'statuses'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for accounts has service', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AccountsHasService->delete($id)) {
			$this->Session->setFlash(__('Accounts has service deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Accounts has service was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function staff_index() {
		$this->AccountsHasService->recursive = 0;
		$this->set('accountsHasServices', $this->paginate());
	}

	function staff_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid accounts has service', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('accountsHasService', $this->AccountsHasService->read(null, $id));
	}

	function staff_add() {
		if (!empty($this->data)) {
			$this->AccountsHasService->create();
			if ($this->AccountsHasService->save($this->data)) {
				$this->Session->setFlash(__('The accounts has service has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The accounts has service could not be saved. Please, try again.', true));
			}
		}
		$accounts = $this->AccountsHasService->Account->find('list');
		$services = $this->AccountsHasService->Service->find('list');
		$prefixes = $this->AccountsHasService->Prefix->find('list');
		$shortNumbers = $this->AccountsHasService->ShortNumber->find('list');
		$accountIdentifiers = $this->AccountsHasService->AccountIdentifier->find('list');
		$currencies = $this->AccountsHasService->Currency->find('list');
		$statuses = $this->AccountsHasService->Status->find('list');
		$this->set(compact('accounts', 'services', 'prefixes', 'shortNumbers', 'accountIdentifiers', 'currencies', 'statuses'));
	}

	function staff_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid accounts has service', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->AccountsHasService->save($this->data)) {
				$this->Session->setFlash(__('The accounts has service has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The accounts has service could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AccountsHasService->read(null, $id);
		}
		$accounts = $this->AccountsHasService->Account->find('list');
		$services = $this->AccountsHasService->Service->find('list');
		$prefixes = $this->AccountsHasService->Prefix->find('list');
		$shortNumbers = $this->AccountsHasService->ShortNumber->find('list');
		$accountIdentifiers = $this->AccountsHasService->AccountIdentifier->find('list');
		$currencies = $this->AccountsHasService->Currency->find('list');
		$statuses = $this->AccountsHasService->Status->find('list');
		$this->set(compact('accounts', 'services', 'prefixes', 'shortNumbers', 'accountIdentifiers', 'currencies', 'statuses'));
	}

	function staff_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for accounts has service', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AccountsHasService->delete($id)) {
			$this->Session->setFlash(__('Accounts has service deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Accounts has service was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
