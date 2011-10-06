<?php
class ShortNumbersController extends AppController {

	var $name = 'ShortNumbers';

	function beforeFilter() {
		parent::beforeFilter();
        $this->Auth->allow('list_combo');
    }

	function list_combo($id = null){
		$this->layout = "ajax";
		if (!$id) {
			//$this->redirect(array('action' => 'index'));
		}
		$this->ShortNumber->recursive = 0;
		$conditions = "ShortNumber.countries_id = ".$id;
		$this->paginate = array('limit' => 20,'conditions' => $conditions);
		$this->set('ShortNumber', $this->paginate());
	}

	function index() {
		$this->ShortNumber->recursive = 0;
		$this->set('shortNumbers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid short number', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('shortNumber', $this->ShortNumber->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ShortNumber->create();
			if ($this->ShortNumber->save($this->data)) {
				$this->Session->setFlash(__('The short number has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The short number could not be saved. Please, try again.', true));
			}
		}
		$countries = $this->ShortNumber->Country->find('list');
		$this->set(compact('countries'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid short number', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ShortNumber->save($this->data)) {
				$this->Session->setFlash(__('The short number has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The short number could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ShortNumber->read(null, $id);
		}
		$countries = $this->ShortNumber->Country->find('list');
		$this->set(compact('countries'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for short number', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ShortNumber->delete($id)) {
			$this->Session->setFlash(__('Short number deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Short number was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function staff_index() {
		$this->ShortNumber->recursive = 0;
		$this->set('shortNumbers', $this->paginate());
	}

	function staff_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid short number', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('shortNumber', $this->ShortNumber->read(null, $id));
	}

	function staff_add() {
		if (!empty($this->data)) {
			$this->ShortNumber->create();
			if ($this->ShortNumber->save($this->data)) {
				$this->Session->setFlash(__('The short number has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The short number could not be saved. Please, try again.', true));
			}
		}
		$countries = $this->ShortNumber->Country->find('list');
		$this->set(compact('countries'));
	}

	function staff_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid short number', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ShortNumber->save($this->data)) {
				$this->Session->setFlash(__('The short number has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The short number could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ShortNumber->read(null, $id);
		}
		$countries = $this->ShortNumber->Country->find('list');
		$this->set(compact('countries'));
	}

	function staff_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for short number', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ShortNumber->delete($id)) {
			$this->Session->setFlash(__('Short number deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Short number was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
