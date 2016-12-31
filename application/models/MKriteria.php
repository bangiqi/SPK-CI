<?php
/**
 * Created by PhpStorm.
 * User: ramdani
 * Date: 12/29/2016
 * Time: 11:48 PM
 */
class MKriteria extends CI_Model{


    public function __construct()
    {
        parent::__construct();
    }

    public function getDataKriteria(){

        //Data Pair Wise Comparison
        $data['dataku']=array(
            array('akhlak','rajin',2),
            array('akhlak','cerdas',4),
            array('rajin','cerdas',2)
        );

        return $data;
    }

}