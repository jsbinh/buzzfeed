<?php

App::uses('AppController', 'Controller');

class PolicysController extends AppController{

    public $helpers = array('Image');

    public function index(){
        $this->redirect(array('controller'=>'Homes', 'action'=>'index'));
    }

    public function submitContent(){
        App::import('Model', 'Post');
        $this->Post = new Post();
        $news_col = $this->Post->find('all', array(
            'conditions' => array(
                'category_id' => NEWS,
                'approved' => 1,
            ),
            'limit' => LIMIT_COLUMN2,
            'order' => array('Post.id' => 'desc')
        ));
        $this->set('news_col', $news_col);
    }

    public function privacy(){
        App::import('Model', 'Post');
        $this->Post = new Post();
        $news_col = $this->Post->find('all', array(
            'conditions' => array(
                'category_id' => NEWS,
                'approved' => 1,
            ),
            'limit' => LIMIT_COLUMN2,
            'order' => array('Post.id' => 'desc')
        ));
        $this->set('news_col', $news_col);
    }

    public function about(){
        App::import('Model', 'Post');
        $this->Post = new Post();
        $news_col = $this->Post->find('all', array(
            'conditions' => array(
                'category_id' => NEWS,
                'approved' => 1,
            ),
            'limit' => LIMIT_COLUMN2,
            'order' => array('Post.id' => 'desc')
        ));
        $this->set('news_col', $news_col);
    }

    public function dmca(){
        App::import('Model', 'Post');
        $this->Post = new Post();
        $news_col = $this->Post->find('all', array(
            'conditions' => array(
                'category_id' => NEWS,
                'approved' => 1,
            ),
            'limit' => LIMIT_COLUMN2,
            'order' => array('Post.id' => 'desc')
        ));
        $this->set('news_col', $news_col);
    }
}