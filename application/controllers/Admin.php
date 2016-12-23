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

    public function matriks_kriteria()
    {
        //Data Pair Wise Comparison
        $data['dataku']=array(
            array('akhlak','rajin',1.40),
            array('akhlak','cerdas',0.83),
            array('rajin','cerdas',1.33)
        );

        $this->template->display("pages/matriks_kriteria", $data);
    }




}