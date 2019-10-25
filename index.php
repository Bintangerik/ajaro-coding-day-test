<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM barang ORDER BY id ASC");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Kelola Data Barang</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <h1 class="head1">KELOLA DATA BARANG</h1>
    <br><br><br>
    <a href="add.php" class="add">Tambah</a>
    <br>
    <b class="head2">Data Barang</b>
    <br><br>
    <table width="80%" border="1" class="table">
        <tr height="50px">
            <th width="15%">Kode</th>
            <th width="25%">Nama</th>
            <th width="30%">Harga</th>
            <th width="30%">Aksi</th>
        </tr>

        <?php
        while( $barang = mysqli_fetch_array($result) ) {
            echo "<tr height='50px'>";
            echo "<td>".$barang['kode']."</td>";
            echo "<td>".$barang['nama']."</td>";
            echo "<td>Rp. ".$barang['harga']."</td>";
            echo "<td width='15%' class='space'><a href='edit.php?id=$barang[id]' class='edit'>Edit</a> <a href='delete.php?id=$barang[id]' class='del'>Hapus</a></td>";
            echo "</tr>";
        }
        
        ?>
    </table>
</body>

</html>