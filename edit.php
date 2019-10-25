<?php
include_once("config.php");
if( isset($_POST['update']) ) {
    $id = $_POST['id'];
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['desk'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $berat = $_POST['berat'];
    $result = mysqli_query($mysqli, "UPDATE barang SET kode='$kode',nama='$nama',deskripsi='$deskripsi',stok='$stok',harga='$harga',berat='$berat' WHERE id=$id");
    header("Location: index.php");
}
?>

<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM barang WHERE id=$id");
while( $barang = mysqli_fetch_array($result) ) {
    $kode = $barang['kode'];
    $nama = $barang['nama'];
    $deskripsi = $barang['deskripsi'];
    $stok = $barang['stok'];
    $harga = $barang['harga'];
    $berat = $barang['berat'];
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Kelola Data Barang | Edit</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <h1 class="head1">KELOLA DATA BARANG</h1>
    <br><br>
    <b class="head3">Update Data Barang</b>
    <br><br>
    <form action="edit.php" method="post" name="update_user">
        <table width="30%" class="tabel" cellpadding="5">
            <tr>
                <td>Kode :</td>
                <td colspan="2"><input type="text" name="kode" class="boxkode" value=<?= $kode;?>></td>
            </tr>
            <tr>
                <td>Nama :</td>
                <td colspan="2"><input type="text" name="nama" class="boxnama" value=<?= $nama;?>></td>
            </tr>
            <tr>
                <td valign="top">Deskripsi :</td>
                <td colspan="2"><textarea name="desk" cols="30" rows="5" class="boxdesk"><?= $deskripsi;?></textarea></td>
            </tr>
            <tr>
                <td>Stok :</td>
                <td colspan="2"><input type="number" name="stok" class="boxstok" value=<?= $stok;?>></td>
            </tr>
            <tr>
                <td>Harga :</td>
                <td colspan="2"><input type="number" name="harga" class="boxharga" value=<?= $harga;?>></td>
            </tr>
            <tr>
                <td>Berat :</td>
                <td width="13%"><input type="number" name="berat" class="boxberat" value=<?= $berat;?>></td>
                <td width="30%"><i>gram</i></td>
            </tr>
            <tr>
                <td colspan="3" align="center"><button name="update" class="button">Simpan</button></td>
            </tr>
            <input type="hidden" name="id" value=<?= $_GET['id'];?>>
        </table>
    </form>
</body>

</html>