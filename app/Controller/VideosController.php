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
            'limit' => 13,
            'order' => array('Post.id' => 'desc')
        );

        $videos_newsest = $this->Post->find('first', array(
            'conditions' => array(
                'category_id' => VIDEOS,
                'approved' => 1,
            ),
            'order' => array('Post.id' => 'desc')
        ));

        $videos_col = $this->Post->find('all', array(
            'conditions' => array(
                'category_id' => NEWS,
                'approved' => 1,
            ),
            'order' => array('Post.id' => 'desc')
        ));
        $this->set('videos_col', $videos_col);
        $this->set('videos_newsest', $videos_newsest);
        $this->set('videos', $this->paginate());
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