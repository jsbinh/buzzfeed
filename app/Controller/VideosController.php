<?php

App::uses('AppController', 'Controller');

class VideosController extends AppController{
    public $uses = array('Post', 'Category');

    public function index(){

    }
}