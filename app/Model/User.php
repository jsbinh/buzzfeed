<?php
App::uses('AppModel', 'Model');

class User extends AppModel {
	public $useTable = 'users';


	public $validate = array(
            'username' => array(
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
            'username' => array(
                'required' => array(
                    'rule' => 'notEmpty',
                    'message' => __('Username is not empty!'),
                ),
                'unique' => array(
                    'rule' => array('isUnique'),
                    'message' => __('Username is not unique!'),
                ),
            ),
            'password' => array(
                'required' => array(
                    'rule' => 'notEmpty',
                    'message' => __('Password is not empty!'),
                ),
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
}