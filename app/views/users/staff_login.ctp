<?php
    if  ($session->check('Message.auth')) $session->flash('auth');
    echo $form->create('Admin', array('action' => 'staff_login'));
    echo $form->input('usuario');
    echo $form->input('pass');
    echo $form->end('Login');
?>