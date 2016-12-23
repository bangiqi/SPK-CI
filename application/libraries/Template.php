<?php
/**
 *
 */
class Template
{

  function __construct()
  {
    $this->_ci =&get_instance();
  }

  public function display($template, $data=null)
  {
    $data['_content']=$this->_ci->load->view($template,$data, true);
    $data['_header_menu']=$this->_ci->load->view('template/header',$data, true);
    $data['_menu']=$this->_ci->load->view('template/menu',$data, true);
    $data['_footer']=$this->_ci->load->view('template/footer',$data, true);
    return $this->_ci->load->view('/main.php',$data);
  }


}


 ?>
