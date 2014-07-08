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
            $this->redirect(array('controller'=>'Homes', 'action'=>'index'));
        }
        $user = $this->Session->read('user');

        $this->layout = 'backend';
        $path_img = WWW_ROOT.'img\upload\\';

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
            $data['Post']['user_id'] = $user['User']['id'];
            $data['Post']['date'] = date('Y-m-d H:i:s');
            $data['Post']['approved'] = 0;
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
        //get all category
        $category = $this->Category->getAllCategory();

        if(!$this->Session->read('user')){
            $this->redirect(array('controller'=>'Homes', 'action'=>'index'));
        }
        $user = $this->Session->read('user');

        $this->layout = 'backend';
        $path_img = WWW_ROOT.'img\upload\\';

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
            $data['Post']['user_id'] = $user['User']['id'];
            $data['Post']['date'] = date('Y-m-d H:i:s');
            $data['Post']['approved'] = 0;
            $this->Post->id = $id;
            $this->Post->set($data);
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

        $this->request->data = $this->Post->findById($id);

        $this->set('category', $category);
        $this->render('admin_detail');
    }

    public function admin_approved($id) {
        $this->layout = 'backend';

        if(!$this->Session->read('user')){
            $this->redirect(array('controller' => 'users', 'action' => 'logout'));
        }
        if($this->Post->updateAll(array('Post.approved' => 1), array('Post.id'=>$id))){
            $this->Session->setFlash('Approved post!', 'success');
            $this->redirect(array('controller'=>'Posts', 'action' => 'index'));
        }
    }

    public function admin_delete() {

    }

}