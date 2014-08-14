<?php

App::uses('AppController', 'Controller');

class AdminController extends AppController{

    public function index(){
        $this->redirect(array('controller' => 'admin/index', 'action' => 'index'));
    }
}