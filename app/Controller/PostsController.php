<?php

App::uses('AppController', 'Controller');

class PostsController extends AppController{
    public $uses = array('Post', 'Category');

    public function index(){

    }

    public function admin_index() {
        $this->layout = 'backend';

        $this->paginate = array(
            'conditions' => array(
                'delete_flg' => 0,
            ),
            'limit' => 25,
            'order' => array('Post.id' => 'asc')
        );
        $this->set('posts', $this->paginate());
    }

    public function admin_add() {
        //get all category
        $category = $this->Category->getAllCategory();

        if(!$this->Session->read('user')){
            //$this->redirect(array('controller'=>'Homes', 'action'=>'index'));
        }
        $user = $this->Session->read('user');

        $this->layout = 'backend';
        $path_img = WWW_ROOT.'upload\\';

        if($this->request->is('post') || $this->request->is('put')){
            $data = $this->request->data;

            if(!empty($data['Post']['url']))
                $url = $data['Post']['url'];

            if (!empty($data['Post']['url']))
                $filename = time() . $url['name'];

            if (!empty($data['Post']['url'])) {
                $data['Post']['url'] = $filename;
                if (!empty($url['name'])) {
                    // Check type of file upload
                    $finfo = finfo_open(FILEINFO_MIME_TYPE);
                    $mime = finfo_file($finfo, $url['tmp_name']);
                    finfo_close($finfo);
                    if (!in_array($mime, Configure::read('FILE_TYPE_UPLOAD'))) {
                        $this->Session->setFlash(Configure::read('TYPE_FILE_ERROR'), 'error');
                        $this->redirect(array('action'=>'add'));
                    }
                }
            }
            //$data['Post']['user_id'] = $user['User']['id'];
            $data['Post']['user_id'] = 1;
            $data['Post']['date'] = date('Y-m-d H:i:s');
            $this->Post->create();
            if($this->Post->save($data)){
                $uploadfile = $path_img.$filename;
                if(move_uploaded_file($url['tmp_name'], $uploadfile)){
                    $this->Session->setFlash('Upload successfull', 'success');
                    $this->redirect(array('action'=>'index'));
                }else{
                    $this->Session->setFlash('Upload error!', 'error');
                }
            }
        }
        $this->set('category', $category);
        $this->render('admin_detail');
    }

    public function admin_edit($id) {
        $this->layout = 'backend';
        //get all category
        $category = $this->Category->getAllCategory();
        $this->Post->id = $id;
        if(!$this->Post->exists()){
            $this->redirect(array('controller'=>'Homes', 'action'=>'index'));
        }
        if(!$this->Session->read('user')){
            //$this->redirect(array('controller'=>'Homes', 'action'=>'index'));
        }
        $user = $this->Session->read('user');



        if($this->request->is('post') || $this->request->is('put')){
            $data = $this->request->data;

            if(!empty($data['Post']['url']))
                $url = $data['Post']['url'];

            if (!empty($data['Post']['url']))
                $filename = time() . $url['name'];

            if (!empty($data['Post']['url'])) {
                $data['Post']['url'] = $filename;
                if (!empty($url['name'])) {
                    // Check type of file upload
                    $finfo = finfo_open(FILEINFO_MIME_TYPE);
                    $mime = finfo_file($finfo, $url['tmp_name']);
                    finfo_close($finfo);
                    if (!in_array($mime, Configure::read('FILE_TYPE_UPLOAD'))) {
                        $this->Session->setFlash(Configure::read('TYPE_FILE_ERROR'), 'error');
                        $this->redirect(array('action'=>'add'));
                    }
                }
            }
            //$data['Post']['user_id'] = $user['User']['id'];
            $data['Post']['user_id'] = 1;
            $data['Post']['date'] = date('Y-m-d H:i:s');
            $this->Post->create();
            if($this->Post->save($data)){
                $uploadfile = $path_img.$filename;
                if(move_uploaded_file($url['tmp_name'], $uploadfile)){
                    $this->Session->setFlash('Upload successfull', 'success');
                    $this->redirect(array('action'=>'index'));
                }else{
                    $this->Session->setFlash('Upload error!', 'error');
                }
            }
        }

        $this->set('category', $category);
        $this->render('admin_detail');
    }

}