<?php

App::uses('AppController', 'Controller');

class HomesController extends AppController{


    public function index(){
        
    }

    public function admin_index() {

    	$this->redirect("/Homes");
    }
}