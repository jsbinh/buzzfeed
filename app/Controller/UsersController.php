<?php

App::uses('AppController', 'Controller');

class UsersController extends AppController{
    public $uses = array('User');

    public function index(){

    }

    public function login(){
        if($this->request->is('post') || $this->request->is('put')){
            $data = $this->request->data;

            $user = $this->User->find('first', array(
                'conditions' => array(
                    'User.username' => trim($data['User']['username']),
                    'User.password' => trim($data['User']['password'])
                )
            ));
            if(empty($user)){
                $this->Session->setFlash('Invalid username or password!', 'error');
                $this->redirect(array('controller'=>'Homes', 'action'=>'index'));
            }else{
                $this->Session->write('user', $user);
                $this->Session->setFlash('Login successful!', 'success');
                $this->redirect(array('controller'=>'Homes', 'action'=>'index'));
            }
        }
    }

    public function logout() {
        $this->Session->delete('user');
        $this->redirect(array('controller'=>'Homes', 'action'=>'index'));
    }

    public function admin_logout() {
        $this->Session->delete('user');
        $this->redirect(array('controller'=>'Homes', 'action'=>'index'));
    }


    public function profile() {
        
    }

    public function changepass() {

    }

}