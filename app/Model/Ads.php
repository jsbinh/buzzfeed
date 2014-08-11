<?php
App::uses('AppModel', 'Model');

class Ads extends AppModel {
	public $useTable = 'ads';


    public function getAllAds(){
        $ads = $this->find('all');

        $result = array();
        if(!empty($ads)){
            foreach ($ads as $val) {
                $result[$val['Ads']['size']] = $val['Ads']['content'];
            }
        }
        return $result;
    }
}