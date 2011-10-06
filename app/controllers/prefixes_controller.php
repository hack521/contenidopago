<?php
class PrefixesController extends AppController {

	var $name = 'Prefixes';

	function beforeFilter() {
		parent::beforeFilter();
        $this->Auth->allow('list_combo');
    }

	function list_combo($id = null){
		$this->layout = "ajax";
		if (!$id) {
			//$this->redirect(array('action' => 'index'));
		}
		$this->Prefix->recursive = 0;
		$conditions = "Prefix.countries_id = ".$id;
		$this->paginate = array('limit' => 20,'conditions' => $conditions);
		$this->set('Prefix', $this->paginate());
	}

	function index() {
		$this->Prefix->recursive = 0;
		$this->set('prefixes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid prefix', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('prefix', $this->Prefix->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Prefix->create();
			if ($this->Prefix->save($this->data)) {
				$this->Session->setFlash(__('The prefix has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prefix could not be saved. Please, try again.', true));
			}
		}
		$countries = $this->Prefix->Country->find('list');
		$this->set(compact('countries'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid prefix', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Prefix->save($this->data)) {
				$this->Session->setFlash(__('The prefix has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prefix could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Prefix->read(null, $id);
		}
		$countries = $this->Prefix->Country->find('list');
		$this->set(compact('countries'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for prefix', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Prefix->delete($id)) {
			$this->Session->setFlash(__('Prefix deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Prefix was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function staff_index() {
		$this->Prefix->recursive = 0;
		$this->set('prefixes', $this->paginate());
	}

	function staff_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid prefix', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('prefix', $this->Prefix->read(null, $id));
	}

	function staff_add() {
		if (!empty($this->data)) {
			$this->Prefix->create();
			if ($this->Prefix->save($this->data)) {
				$this->Session->setFlash(__('The prefix has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prefix could not be saved. Please, try again.', true));
			}
		}
		$countries = $this->Prefix->Country->find('list');
		$this->set(compact('countries'));
	}

	function staff_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid prefix', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Prefix->save($this->data)) {
				$this->Session->setFlash(__('The prefix has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prefix could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Prefix->read(null, $id);
		}
		$countries = $this->Prefix->Country->find('list');
		$this->set(compact('countries'));
	}

	function staff_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for prefix', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Prefix->delete($id)) {
			$this->Session->setFlash(__('Prefix deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Prefix was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
