<?php

/**
 * Created by PhpStorm.
 * User: ramdani
 * Date: 12/17/2016
 * Time: 12:53 PM
 */
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('Template');
        $this->load->model('Coba');
        $this->load->model('MKriteria');
        $this->load->helper('form');
    }

    public function index()
    {
        $this->template->display("pages/kriteria", null);
    }

    public function kriteria()
    {
        //$query['data_siswa'] = $this->Coba->getSiswa();

        //var_dump($query);
        $this->template->display("pages/kriteria", null);
    }

    public function alternatif()
    {
        $this->template->display("pages/alternatif", null);
    }

    public function calc_kriteria()
    {
        $this->template->display("pages/add_kriteria", null);
    }

    public function add_question(){
        $data['pairwise_kriteria'] = $this->MKriteria->getDataKriteria();
        $this->template->display("pages/add_question", $data);
    }
    public function choose(){
        //$data['pairwise_kriteria'] = $this->MKriteria->getDataKriteria();
        $this->template->display("pages/choose_kriteria", null);
    }

    public function get_kriteria_weight(){

        $data = $this->MKriteria->getDataKriteria();



        //$this->logDump($decodeToObject);

        $getKriteria[] = $this->input->post('kriteria[]');

        $aku = [];

        //var_dump($getKriteria);

        // dataku -> value
        foreach ($data['dataku'] as $key => $value){

            //$this->logDump("log : ".$key);
            //$this->logDump("log : ".$value[0]);



            foreach ($getKriteria as $getKey => $getScore){
                 $getScorep[] = $getScore;
            }

            //$this->logDump("getscore : ".$getScorep[0]);

            $aku[] = [
                    "kriteria_1"=>$value[0],
                    "kriteria_2"=>$value[1],
                    "value_mtx"=>(double) $getKriteria[0][$key+1]
            ];

        }

        //convert
        $Json = $this->encodeToJson($aku);

        $decodeToObject['test_obj'] = $this->decodeToObject($Json);

        //var_dump($aku);

        //$this->logDump($decodeToObject);
        $this->template->display("pages/matriks_kriteria", $decodeToObject);
    }

    public function encodeToJson($array){
        return json_encode($array);
    }

    public function decodeToObject($json){
        return json_decode($json);
    }

    public function logDump($array){
        //echo "<h1>array yang akan dikirim : </h1>";
        //echo "<pre>";
        var_dump($array);
        //echo "</pre>";
    }

    public function matriks_kriteria()
    {


        //Data Pair Wise Comparison
        $data['dataku']=array(
            array('akhlak','rajin',2),
            array('akhlak','cerdas',4),
            array('rajin','cerdas',2)
        );

        $this->template->display("pages/matriks_kriteria", $data);
    }




}