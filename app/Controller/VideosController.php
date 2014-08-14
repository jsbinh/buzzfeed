<?php

App::uses('AppController', 'Controller');

class VideosController extends AppController{
    public $uses = array('Post', 'Category', 'User', 'News');
    public $helpers = array('Image');

    public function index(){
    	$this->paginate = array(
            'conditions' => array(
            	'category_id' => VIDEOS,
                'approved' => 1,
            ),
            'limit' => LIMIT_PAGING,
            'order' => array('Post.id' => 'desc')
        );

        $videos_newsest = $this->Post->find('first', array(
            'conditions' => array(
                'category_id' => VIDEOS,
                'approved' => 1,
            ),
            'order' => array('Post.id' => 'desc')
        ));

        $column2 = $this->Post->find('all', array(
            'conditions' => array(
                'category_id' => NEWS,
                'approved' => 1,
            ),
            'limit' => LIMIT_COLUMN2,
            'order' => array('Post.id' => 'desc')
        ));

        $this->set('column2', $column2);
        $this->set('videos_newsest', $videos_newsest);
        $this->set('news', $this->paginate());
    }

    public function view($id, $title = null) {
        $this->Post->id = $id;
        if(!$this->Post->exists()){
            $this->redirect(array('controller'=>'Homes', 'action'=>'index'));
        }
    	$news = $this->Post->findById($id);
        $user = array();
        if(!empty($news)){
            App::import('Model', 'User');
            $this->User = new User();
            $user = $this->User->getUsername($news['Post']['user_id']);
        }
    	$this->set('title_for_layout', $this->Post->convertToEn($news['Post']['title']));
    	$this->set('news', $news);
        $this->set('user', $user);
	}
}