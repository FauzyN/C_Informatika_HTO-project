<?php

class M_meja extends CI_Model{
	function pilih(){
		return $this->db->get('meja');
	}

	function tampil_meja (){
       $query = $this->db->query("select * from meja");
       return $query->result();

    }
}
