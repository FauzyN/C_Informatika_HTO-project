<h2>List Pesanan</h2>
<table border="1">
    <tr>
        <th>nomor_meja</th>
        <th>total_harga</th>
        <th>jumlah</th>
        <tr/>
    <?php
    include 'koneksi.php';
    $i=0;
    $transaksi_pemesanan = mysqli_query($koneksi, "SELECT DISTINCT * from transaksi_pemesanan where id_menu in (SELECT max(id_menu) from transaksi_pemesanan)");
    
    foreach ($transaksi_pemesanan as $row){
        echo "<tr>
            <td>".$row['nomor_meja']."</td>
            <td>".$row['total_harga']."</td>
            <td>".$row['jumlah']."</td>
              </tr>";
    }