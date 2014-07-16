<?php

App::uses('AppController', 'Controller');

class IndexController extends AppController{


    public function admin_index(){
        $this->layout = 'backend';
        $this->redirect(array('controller'=>'Posts', 'action'=>'index'));
    }
}