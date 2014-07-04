<?php
App::uses('AppModel', 'Model');

class Category extends AppModel {
	public $useTable = 'category';




    public function getAllCategory(){
        $category = $this->find('list', array(
        	'fields' => array('id', 'category_name')
        ));
        return $category;
    }

}