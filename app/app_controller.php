<?php
class AppController extends Controller {

	var $components = array('Auth');

	function beforeFilter(){
		$this->Auth->userModel = 'User';
		$this->Auth->fields = array('username' => 'usuario', 'password' => 'password');
		$this->Auth->loginAction = array('admin' => false, 'controller' => 'users', 'action' => 'login');
        $this->Auth->loginRedirect = array('controller' => 'Users', 'action' => 'index');
	}
	
}//end class
?>