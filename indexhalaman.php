
<?php
    include ('koneksi.php');
?>

<?php
        if(isset($_POST["batal"]))
        {
            mysqli_query($koneksi, "delete from transaksi_pemesanan");
            header ('location: order_makanan_minuman.php');
        }

        if(isset($_POST["pesan"]))
        {
            header ("location: pesan.html");
        }
?>

<!DOCTYPE hmtl>
<html>
    <head>
        <meta charset="UTF-8">
        <title>indexhalaman</title>
    </head>

    <body>
        <h2>List Pesanan</h2>
        <table border="1">
        <tr>
            <th>Food/Drink</th>
            <th>jumlah</th>
            <th>total_harga</th>
        <tr/>
        <?php
        include 'koneksi.php';
        $i=0;
        $transaksi_pemesanan = mysqli_query($koneksi, "SELECT a.nama_menu, b.total_harga, b.jumlah from transaksi_pemesanan b, menu_makanan a where a.id_menu=b.id_menu");
    
        foreach ($transaksi_pemesanan as $row)
        {
            echo "<tr>
            <td>".$row['nama_menu']."</td>
            <td>".$row['jumlah']."</td>
            <td>".$row['total_harga']."</td>
              </tr>";
        }
        ?>


        <form name="pesan" action="indexhalaman.php" method="post">
            <input  type="submit" name="batal" value="BATAL">
            <input  type="submit" name="pesan" value="ORDER NOW">
        </form>



    </body>
</html>