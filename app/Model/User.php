<?php
App::uses('AppModel', 'Model');

class User extends AppModel {
	public $useTable = 'users';


	public $validate = array(
            'email' => array(
                'notEmpty' => array(
                    'rule' => array('notEmpty')
                )
            ),
            'password' => array(
                'notEmpty' => array(
                    'rule' => array('notEmpty')
                )
            ),
            'fullname' => array(
                'notEmpty' => array(
                    'rule' => array('notEmpty')
                )
            ),
        );

    public function customValidate() {
        $validate = array(
            'email' => array(
                'required' => array(
                    'rule' => 'notEmpty',
                    'message' => __('Email is exist!'),
                ),
                'unique' => array(
                    'rule' => array('isUnique'),
                    'message' => __('Username is not unique!'),
                ),
                'email' => array(
                    'rule' => array('email'),
                    'message' => __('Username is not email format!'),
                ),
            ),
            'password' => array(
                'required' => array(
                    'rule' => 'notEmpty',
                    'message' => __('Password is not empty!'),
                ),
                'confirm' => array(
                    'rule' => ('confirmPass'),
                    'message' => __('These passwords don\'t match!'),
                )
            ),
            'fullname' => array(
                'required' => array(
                    'rule' => 'notEmpty',
                    'message' => __('Fullname is not empty!'),
                ),
            ),
            // 'image' => array(
            //     'required' => array(
            //         'rule' => 'notEmpty',
            //         'message' => __('Image is not empty!'),
            //     ),
            // ),
        );
        $this->validate = $validate;
        return $this->validates();
    }

    public function getUsername($id){
        $user = $this->find('first', array(
            'conditions' => array(
                'User.id' => $id,
                // 'User.delete_flg' => 0
            ),
            'fields' => array('id', 'fullname', 'image')
        ));
        return $user;
    }

    public function getUsernameById($id){
        $user = $this->find('first', array(
            'conditions' => array(
                'User.id' => $id,
                // 'User.delete_flg' => 0
            ),
            'fields' => array('id', 'fullname', 'image')
        ));
        return $user['User']['fullname'];
    }

    public function confirmPass(){
        if($this->data['User']['password'] != $this->data['User']['confirmPassword'])
            return false;
        else
            return true;
    }

    public function getAllUser(){
        $users = $this->find('all', array(
            'conditions' => array(
                // 'User.delete_flg' => 0
            ),
            'fields' => array('id', 'fullname')
        ));
        $user_list = array();
        if(!empty($users)){
            foreach ($users as $value) {
                $user_list[$value['User']['id']] = $value['User']['fullname'];
            }
        }

        return $user_list;
    }
}