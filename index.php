<?php
include ("koneksi.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="nama"> nama pembayar</label><br>
        <input name="nama"> </input><br>
        <label for="tanggungan"> jumlah tanggungan</label><br>
        <input type="number" name="tanggungan"> </input><br>
        <label for="hb"> harga</label><br>
        <input name="hb"> </input><br>
        <label for="tb"> total bayar</label><br>
        <input type="text" name="tb"> </input><br>

        <button type="submit" name="Tambah"> tambah</button><br>
    </form>
    <?php
if (isset($_POST["Tambah"])){
    $nama=htmlspecialchars($_POST["nama"]);
    $tanggungan=htmlspecialchars($_POST["tanggungan"]);
    $hb=htmlspecialchars($_POST["hb"]);
    $tb=htmlspecialchars($_POST["tb"]);
    
    $queryInsert="`pembayar_zakat`(`nama`, `tanggungan`, `harga_beras`, `total_bayar`) VALUES ('$nama','$tanggungan','$hb','$tb')";
    $db->Insert($queryInsert);
    echo "berhasil";
}
    ?>
</body>
</html>