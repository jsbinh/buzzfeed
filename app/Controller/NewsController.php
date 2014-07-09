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
            'limit' => 20,
            'order' => array('Post.id' => 'desc')
        );

        $news_newsest = $this->Post->find('first', array(
            'conditions' => array(
                'category_id' => NEWS,
                'approved' => 1,
            ),
            'order' => array('Post.id' => 'desc')
        ));
        $this->set('newsest', $news_newsest);
        $this->set('news', $this->paginate());
    }

    public function view($id, $title) {
    	$news = $this->Post->findById($id);
    	$this->set('title_for_layout', $this->Post->convertToEn($news['Post']['title']));
    	$this->set('news', $news);
	}
}