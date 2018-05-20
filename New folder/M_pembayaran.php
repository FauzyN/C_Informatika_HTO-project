<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pembayaran extends CI_Model {

  function get()
   {
     return $this->db->get('transaksi_pemesanan');   
   }

  function tm_pembayaran(){
       $query = $this->db->query("SELECT * FROM transaksi_pemesanan");
       return $query;

    }
}
