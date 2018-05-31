<?php
  include("connection.php");
  mysqli_query("$link, select * from transaksi_pemesanan where nomor_meja=:'2'");
?>
