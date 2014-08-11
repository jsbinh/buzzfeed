<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class IndexController extends AppController{


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
                'DATE(Post.date) = CURDATE()',
                'Post.approved' => 1
            )
        ));
        if(!empty($posts) && !empty($list_email)){
            foreach ($list_email as $email) {
                //$this->_sendEmail($email, $posts);
            }
        }
    }

    public function _sendEmail($email, $data){
        $Email = new CakeEmail('default');
        $subject = 'Contact from forexpam.com';
        $content =
            'Name: '.$data['Contact']['name'].'<br>'.
            'Email: '.$data['Contact']['email'].'<br>'.
            'Message: '.$data['Contact']['note'].'<br>';
        $Email->emailFormat('html')
                ->to($send_to_email)
                ->from($send_to_email)
                ->subject($subject)
                ->send(nl2br($content));
        $Email->reset();
    }
}