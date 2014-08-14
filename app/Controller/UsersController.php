<?php

App::uses('AppController', 'Controller');

class UsersController extends AppController{
    public $uses = array('User', 'EmailSubscribing', 'Post');

    public function index(){
        $this->redirect(array('controller'=>'Homes', 'action'=>'index'));
    }

    public function login(){
        if($this->request->is('post') || $this->request->is('put')){
            $data = $this->request->data;

            $user = $this->User->find('first', array(
                'conditions' => array(
                    'User.email' => trim($data['User']['email']),
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
        if(!$this->Session->read('user')){
            $this->redirect(array('controller'=>'Homes', 'action'=>'index'));
        }
        $user = $this->Session->read('user');
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

        if($this->request->is('post') || $this->request->is('put')){
            $data = $this->request->data;
            if($this->User->customValidate()){
                $this->User->id = $user['User']['id'];
                $this->User->set($data);
                if($this->User->save($data)){
                    $this->Session->setFlash('Change profile successful!', 'success');
                    $this->redirect(array('controller'=>'Homes', 'action'=>'index'));
                }
            }
        }
        $this->request->data = $user;
    }

    public function changepass() {
        if(!$this->Session->read('user')){
            $this->redirect(array('controller'=>'Homes', 'action'=>'index'));
        }
        $user = $this->Session->read('user');

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

        if($this->request->is('post') || $this->request->is('put')){
            $data = $this->request->data;
            if($this->User->customValidate()){
                $this->User->id = $user['User']['id'];
                $this->User->set($data);
                if($this->User->save($data)){
                    $this->Session->setFlash('Change password successful!', 'success');
                    $this->redirect(array('controller'=>'Homes', 'action'=>'index'));
                }
            }
        }
        $this->request->data = $user;
    }

    public function register(){

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

        if($this->request->is('post') || $this->request->is('put')){
            $data = $this->request->data;
            if($this->User->customValidate()){
                // unset($data['User']['confirmPassword']);
                $this->User->create();
                if($this->User->save($data)){
                    $this->Session->setFlash('Register successful!', 'success');
                    $this->redirect(array('controller'=>'Homes', 'action'=>'index'));
                }
            }
        }
    }

    public function addEmail(){
        $news_col = $this->Post->find('all', array(
            'conditions' => array(
                'category_id' => NEWS,
                'approved' => 1,
            ),
            'limit' => 10,
            'order' => array('Post.id' => 'desc')
        ));

        if($this->request->is('post') || $this->request->is('put')){
            if(!empty($this->request->data)){
                $this->EmailSubscribing->create();
                $this->EmailSubscribing->save($this->request->data);
            }
        }

        $this->set('news_col', $news_col);
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
                'delete_flg' => 0,
            ),
            'limit' => LIMIT_PAGING,
            'order' => array('User.id' => 'desc')
        );

        $this->set('users', $this->paginate());
    }

    public function admin_add(){
        $this->layout = 'backend';

        if(!$this->Session->read('user')){
            $this->redirect(array('controller'=>'Homes','action'=>'index'));
        }

        $user = $this->Session->read('user');
        if($user['User']['group'] == 0){
            $this->redirect(array('controller'=>'Homes', 'action'=>'index'));
        }

        if($this->request->is('post') || $this->request->is('put')){
            if($this->User->customValidate()){
                $this->User->create();
                if($this->User->save($this->request->data)){
                    $this->Session->setFlash('Add new user successful', 'success');
                    $this->redirect(array('action'=>'index'));
                }
            }
        }

        $this->render('admin_details');
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

        $user_current = $this->User->findById($id);
        if(!$this->User->exists($id)){
            $this->redirect(array('controller'=>'Users', 'action'=>'index'));
        }

        if($this->request->is('post') || $this->request->is('put')){
            if($this->User->customValidate()){
                $this->User->id = $id;
                $this->User->set($this->request->data);
                if($this->User->save($this->request->data)){
                    $this->Session->setFlash('Edit user successful', 'success');
                    $this->redirect(array('action'=>'index'));
                }
            }
        }else{
            $this->request->data = $user_current;
        }

        $this->render('admin_details');
    }

    public function admin_delete($id){
        $this->layout = 'backend';
        if(!$this->Session->read('user')){
            $this->redirect(array('controller'=>'Homes','action'=>'index'));
        }

        $user = $this->Session->read('user');
        if($user['User']['group'] == 0){
            $this->redirect(array('controller'=>'Homes', 'action'=>'index'));
        }

        $user_current = $this->User->findById($id);
        if(!$this->User->exists($id)){
            $this->redirect(array('controller'=>'Users', 'action'=>'index'));
        }

        if($this->request->is('post') || $this->request->is('put')){
            if($this->User->updateAll(array('User.delete_flg' => 1), array('User.id'=>$id))){
                $this->Session->setFlash('Delete user successful', 'success');
                $this->redirect(array('action'=>'index'));
            }
        }
    }

}