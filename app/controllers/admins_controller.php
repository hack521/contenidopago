<?php
class AdminsController extends AppController {

	var $name = 'Admins';
	var $components = array('Auth');

	function staff_login() {   
	}
	
	function staff_logout() { 
		$this->redirect($this->Auth->logout());
	}

	function beforeFilter() {
		//Security::setHash("md5");
		$this->Auth->allow('staff_login','staff_add');
		$this->Auth->userModel = 'Admin';
		$this->Auth->fields = array('username' => 'usuario', 'password' => 'password');
		$this->Auth->loginAction = array('admin' => false, 'controller' => 'admins', 'action' => 'staff_login');
        $this->Auth->loginRedirect = array('controller' => 'admins', 'action' => 'index');
	}

	function index() {
		$this->Admin->recursive = 0;
		$this->set('admins', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid admin', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('admin', $this->Admin->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Admin->create();
			if ($this->Admin->save($this->data)) {
				$this->Session->setFlash(__('The admin has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The admin could not be saved. Please, try again.', true));
			}
		}
		$statuses = $this->Admin->Status->find('list');
		$this->set(compact('statuses'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid admin', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Admin->save($this->data)) {
				$this->Session->setFlash(__('The admin has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The admin could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Admin->read(null, $id);
		}
		$statuses = $this->Admin->Status->find('list');
		$this->set(compact('statuses'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for admin', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Admin->delete($id)) {
			$this->Session->setFlash(__('Admin deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Admin was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function staff_index() {
		$this->Admin->recursive = 0;
		$this->set('admins', $this->paginate());
	}

	function staff_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid admin', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('admin', $this->Admin->read(null, $id));
	}

	function staff_add() {
		if (!empty($this->data)) {
			$this->Admin->create();
			if ($this->Admin->save($this->data)) {
				//$this->Session->setFlash(__('El administrador ha sido creado.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The admin could not be saved. Please, try again.', true));
			}
		}
		$statuses = $this->Admin->Status->find('list');
		$this->set(compact('statuses'));
	}

	function staff_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid admin', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Admin->save($this->data)) {
				$this->Session->setFlash(__('The admin has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The admin could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Admin->read(null, $id);
		}
		$statuses = $this->Admin->Status->find('list');
		$this->set(compact('statuses'));
	}

	function staff_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for admin', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Admin->delete($id)) {
			$this->Session->setFlash(__('Admin deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Admin was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
