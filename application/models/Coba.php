<?php
/**
 * Created by PhpStorm.
 * User: ramdani
 * Date: 12/17/2016
 * Time: 2:31 PM
 */

class Coba extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function getSiswa(){

        /*$data = [
            "nama"=>"rizki",
            "kelas"=>"karyawan A",
            "npm"=>"131105150354"
        ];*/

        $query = $this->db->get('galleries');

        return $query->result();

    }



}
