<?php
    if  ($session->check('Message.auth')) $session->flash('auth');
    echo $form->create('User', array('action' => 'login'));
    echo $form->input('usuario');
    echo $form->input('password');
    echo $form->end('Login');
    echo $form->create('User', array('action' => 'register'));
	echo $form->end('Registrarse');
?>