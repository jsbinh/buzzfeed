<?php
App::uses('AppModel', 'Model');

class Post extends AppModel {
	public $useTable = 'posts';

    public $validate = array(
            'title' => array(
                'notEmpty' => array(
                    'rule' => array('notEmpty')
                )
            ),
            'summary' => array(
                'notEmpty' => array(
                    'rule' => array('notEmpty')
                )
            ),
            'content' => array(
                'notEmpty' => array(
                    'rule' => array('notEmpty')
                )
            ),
            'url' => array(
                'notEmpty' => array(
                    'rule' => array('notEmpty')
                )
            ),
        );

    public function customValidate() {
        $validate = array(
            'title' => array(
                'required' => array(
                    'rule' => 'notEmpty',
                    'message' => __('Title is not empty!'),
                ),
            ),
            'summary' => array(
                'required' => array(
                    'rule' => 'notEmpty',
                    'message' => __('Summary is not empty!'),
                ),
            ),
            'content' => array(
                'required' => array(
                    'rule' => 'notEmpty',
                    'message' => __('Content is not empty!'),
                ),
            ),
            'url' => array(
                'required' => array(
                    'rule' => 'notEmpty',
                    'message' => __('Content is not empty!'),
                ),
                // 'image' => array(
                //     'rule' => array(getOnlyImage()),
                //     'message' => __('Image only!'),
                // ),
            ),
        );
        $this->validate = $validate;
        return $this->validates();
    }

    // public function getOnlyImage(){
    //     pr($this->data);exit;
    // }

    public function convertToEn($str) {
        $str = strtolower($str);
        $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
        $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
        $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
        $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
        $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
        $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
        $str = preg_replace('/(đ)/', 'd', $str);
        $str = preg_replace('/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/', 'a', $str);
        $str = preg_replace('/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/', 'e', $str);
        $str = preg_replace('/(Ì|Í|Ị|Ỉ|Ĩ)/', 'I', $str);
        $str = preg_replace('/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/', '0', $str);
        $str = preg_replace('/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/', 'u', $str);
        $str = preg_replace('/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/', 'y', $str);
        $str = preg_replace('/(Đ)/', 'd', $str);
        $str = str_replace(' ', '-', $str);
        return $str;
    }

}