<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {
  function __construct();
    parent:: __construct();
    $this->load->model('M_pembayaran');
}

  public function index(){
    //$this->load->model('M_pembayaran');
      $data['pembayaran']= $this->M_pembayaran->tm_pembayaran();
      $this->load->view('v_kasir', $data);
  }



}
