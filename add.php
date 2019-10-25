<!DOCTYPE html>
<html>

<head>
    <title>Kelola Data Barang | Tambah</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <h1 class="head1">KELOLA DATA BARANG</h1>
    <br><br>
    <b class="head3">Input Data Barang</b>
    <br><br>
    <form action="add.php" method="post" name="form1">
        <table width="30%" class="tabel" cellpadding="5">
            <tr>
                <td>Kode :</td>
                <td colspan="2"><input type="text" name="kode" class="boxkode"></td>
            </tr>
            <tr>
                <td>Nama :</td>
                <td colspan="2"><input type="text" name="nama" class="boxnama"></td>
            </tr>
            <tr>
                <td valign="top">Deskripsi :</td>
                <td colspan="2"><textarea name="desk" cols="30" rows="5" class="boxdesk"></textarea></td>
            </tr>
            <tr>
                <td>Stok :</td>
                <td colspan="2"><input type="number" name="stok" class="boxstok"></td>
            </tr>
            <tr>
                <td>Harga :</td>
                <td colspan="2"><input type="number" name="harga" class="boxharga"></td>
            </tr>
            <tr>
                <td>Berat :</td>
                <td width="13%"><input type="number" name="berat" class="boxberat"></td>
                <td width="30%"><i>gram</i></td>
            </tr>
            <tr>
                <td colspan="3" align="center"><button name="submit" class="button">Tambah</button></td>
            </tr>
        </table>
    </form>

    <?php
    if ( isset($_POST['submit']) ) {
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $deskripsi = $_POST['desk'];
        $stok = $_POST['stok'];
        $harga = $_POST['harga'];
        $berat = $_POST['berat'];
        include_once("config.php");
        $result = mysqli_query($mysqli, "INSERT INTO barang(kode,nama,deskripsi,stok,harga,berat) VALUES('$kode','$nama','$deskripsi','$stok','$harga','$berat')");
        header("Location: index.php");
    }
    ?>
</body>

</html>