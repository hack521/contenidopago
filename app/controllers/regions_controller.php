<?php
class RegionsController extends AppController {

	var $name = 'Regions';

	function list_combo($id = null){
		if (!$id) {
			//$this->redirect(array('action' => 'index'));
		}
		$this->Region->read(null, $id);
		$this->set('region', $this->paginate());
	}

	function index() {
		$this->Region->recursive = 0;
		$this->set('regions', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid region', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('region', $this->Region->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Region->create();
			if ($this->Region->save($this->data)) {
				$this->Session->setFlash(__('The region has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The region could not be saved. Please, try again.', true));
			}
		}
		$countries = $this->Region->Country->find('list');
		$this->set(compact('countries'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid region', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Region->save($this->data)) {
				$this->Session->setFlash(__('The region has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The region could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Region->read(null, $id);
		}
		$countries = $this->Region->Country->find('list');
		$this->set(compact('countries'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for region', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Region->delete($id)) {
			$this->Session->setFlash(__('Region deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Region was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function staff_index() {
		$this->Region->recursive = 0;
		$this->set('regions', $this->paginate());
	}

	function staff_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid region', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('region', $this->Region->read(null, $id));
	}

	function staff_add() {
		if (!empty($this->data)) {
			$this->Region->create();
			if ($this->Region->save($this->data)) {
				$this->Session->setFlash(__('The region has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The region could not be saved. Please, try again.', true));
			}
		}
		$countries = $this->Region->Country->find('list');
		$this->set(compact('countries'));
	}

	function staff_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid region', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Region->save($this->data)) {
				$this->Session->setFlash(__('The region has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The region could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Region->read(null, $id);
		}
		$countries = $this->Region->Country->find('list');
		$this->set(compact('countries'));
	}

	function staff_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for region', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Region->delete($id)) {
			$this->Session->setFlash(__('Region deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Region was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
