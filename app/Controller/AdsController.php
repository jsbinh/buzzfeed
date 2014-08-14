<?php

App::uses('AppController', 'Controller');

class AdsController extends AppController{

    public function index(){
        $this->redirect(array('controller'=>'Homes', 'action'=>'index'));
    }

    public function admin_index(){
        $this->layout = 'backend';

        if(!$this->Session->read('user')){
            $this->redirect(array('controller'=>'Homes','action'=>'index'));
        }

        $user = $this->Session->read('user');
        if($user['User']['group'] == 0){
            $this->redirect(array('controller'=>'Homes', 'action'=>'index'));
        }

        $this->paginate = array(
            'conditions' => array(
                // 'delete_flg' => 0,
            ),
            'limit' => LIMIT_PAGING,
            // 'order' => array('Ads.id' => 'desc')
        );

        $this->set('ads', $this->paginate());
    }

    public function admin_edit($id){
        $this->layout = 'backend';
        if(!$this->Session->read('user')){
            $this->redirect(array('controller'=>'Homes','action'=>'index'));
        }
        $user = $this->Session->read('user');
        if($user['User']['group'] == 0){
            $this->redirect(array('controller'=>'Homes', 'action'=>'index'));
        }

        $user_current = $this->Ad->findById($id);
        if(!$this->Ad->exists($id)){
            $this->redirect(array('controller'=>'Users', 'action'=>'index'));
        }

        if($this->request->is('post') || $this->request->is('put')){
            $this->Ad->id = $id;
            $this->Ad->set($this->request->data);
            if($this->Ad->save($this->request->data)){
                $this->Session->setFlash('Edit ads successful', 'success');
                $this->redirect(array('action'=>'index'));
            }

        }else{
            $this->request->data = $user_current;
        }
        $this->render('admin_details');
    }
}