<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class IndexController extends AppController{
    public $helpers = array('Image');

    public function admin_index(){
        $this->redirect(array('controller'=>'Posts', 'action'=>'index'));
    }

    public function index(){
    	$this->redirect(array('controller'=>'Homes', 'action'=>'index'));
    }

    public function admin_sendmail(){
        $this->layout = 'backend';
        if(!$this->Session->read('user')){
            $this->redirect(array('controller' => 'users', 'action' => 'logout'));
        }
        $user = $this->Session->read('user');
        if($user['User']['group'] == 0){
            $this->redirect(array('controller'=>'Homes', 'action'=>'index'));
        }

    	App::import('Model', array('EmailSubscribing', 'Post'));
        $this->EmailSubscribing = new EmailSubscribing();
        $this->Post = new Post();

        $emails = $this->EmailSubscribing->find('all');

        $list_email = array();
        if(!empty($emails)){
            foreach ($emails as $k => $v) {
                $list_email[] = $v['EmailSubscribing']['email'];
            }
        }

        if(!empty($list_email))
            $list_email = array_unique($list_email);

        $posts = $this->Post->find('all', array(
            'conditions' => array(
                // 'DATE(Post.date) = CURDATE()',
                'Post.approved' => 1,
                'Post.send_email' => 0,
            ),
            'order' => array('Post.date' => 'desc')
        ));
        if(!empty($posts) && !empty($list_email)){
            foreach ($list_email as $email) {
                $this->_sendEmail($email, $posts);
            }
            foreach ($posts as $key => $post) {
                $this->Post->updateAll(array('Post.send_email'=>1), array('Post.id'=>$post['Post']['id']));
            }
        }
    }

    public function _sendEmail($email, $data){
        $subject = $data[0]['Post']['title'];
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $Email = new CakeEmail('default');
            $Email->reset();
            $Email->viewVars(array('data' => $data));
            $Email->template('sendemail');
            $Email->emailFormat('html');
            $Email->to($email);
            $Email->from(array('newsletter@izzfeed.com'=>'IzzFeed Stories'));
            $Email->subject($subject);

            try{
                $Email->send();
            }catch(Exception $e){
                $this->log( $e->getMessage(), 'error');
            }
        }else{
            $this->log('Email errors'.$email, 'error');
        }

    }
}