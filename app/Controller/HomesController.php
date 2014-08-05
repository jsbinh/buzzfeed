<?php

App::uses('AppController', 'Controller');

class HomesController extends AppController{
    public $uses = array('Post', 'Category', 'User', 'News');
    public $helpers = array('Image');

    public function index(){
        App::import('Model', 'Post');
        $this->Post = new Post();

        $this->paginate = array(
            'conditions' => array(
                // 'category_id' => NEWS,
                'approved' => 1,
            ),
            'limit' => 20,
            'order' => array('Post.id' => 'desc')
        );

        $news_newsest = $this->Post->find('first', array(
            'conditions' => array(
                // 'category_id' => NEWS,
                'approved' => 1,
            ),
            'order' => array('Post.id' => 'desc')
        ));

        $news_col = $this->Post->find('all', array(
            'conditions' => array(
                'category_id' => NEWS,
                'approved' => 1,
            ),
            'limit' => 10,
            'order' => array('Post.id' => 'desc')
        ));

        $column3 = $this->Post->find('all', array(
            'conditions' => array(
                // 'category_id' => NEWS,
                'approved' => 1,
            ),
            'limit' => 10,
            'order' => array('Post.id' => 'desc')
        ));

        $this->set('column3', $column3);
        $this->set('news_col', $news_col);
        $this->set('newsest', $news_newsest);
        $this->set('homes_info', $this->paginate());
    }

    public function admin_index() {

    	$this->redirect("/Homes");
    }
}