<?php
class UsersController extends AppController {

	var $name = 'Users';
	var $helpers = array('Html', 'Form', 'Ajax');
	var $components = array('Auth');

	function beforeFilter() {
		parent::beforeFilter();
        $this->Auth->allow('register');
    }

    function register() {
        if (!empty($this->data)) {
        	$this->data['User']['status_id'] = 1;
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('Su cuenta ha sido creada.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se ha `podido registrar, intentelo de nuevo.', true));
			}
		}

        $countries = $this->User->Country->find('list');
		$regions = $this->User->Region->find('list');
		$cities = $this->User->City->find('list');
		
		$this->set(compact('countries', 'regions', 'cities'));
    }

	function profile($id = null){
		if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	 function login() {
	 }
 
 	function logout() {
  	$this->redirect($this->Auth->logout());
 	}
	
	function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		
		$countries = $this->User->Countries->find('list');
		$regions = $this->User->Region->find('list');
		$cities = $this->User->City->find('list');
		$statuses = $this->User->Status->find('list');
		
		$this->set(compact('countries', 'regions', 'cities', 'statuses'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		$countries = $this->User->Country->find('list');
		$regions = $this->User->Region->find('list');
		$cities = $this->User->City->find('list');
		$statuses = $this->User->Status->find('list');
		$this->set(compact('countries', 'regions', 'cities', 'statuses'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function staff_login() {

	}

	function staff_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function staff_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function staff_add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		$countries = $this->User->Countries->find('list');
		$regions = $this->User->Region->find('list');
		$cities = $this->User->City->find('list');
		$statuses = $this->User->Status->find('list');
		$this->set(compact('countries', 'regions', 'cities', 'statuses'));
	}

	function staff_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		$countries = $this->User->Country->find('list');
		$regions = $this->User->Region->find('list');
		$cities = $this->User->City->find('list');
		$statuses = $this->User->Status->find('list');
		$this->set(compact('countries', 'regions', 'cities', 'statuses'));
	}

	function staff_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
