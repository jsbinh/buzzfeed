<?php

App::uses('AppController', 'Controller');

class LifesController extends AppController{
    public $uses = array('Post', 'Category');

    public function index(){

    }
}