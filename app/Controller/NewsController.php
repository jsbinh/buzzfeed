<?php

App::uses('AppController', 'Controller');

class NewsController extends AppController{
    public $uses = array('Post', 'Category');

    public function index(){
    	$this->paginate = array(
            'conditions' => array(
            	'category_id' => NEWS,
                'approved' => 1,
            ),
            'limit' => 25,
            'order' => array('Post.id' => 'desc')
        );
        $this->set('news', $this->paginate());
    }

    public function view() {

	}
}