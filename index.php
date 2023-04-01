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
    <form>
        <label for="nama"> nama pembayar</label><br>
        <input id="nama"> </input><br>
        <label for="tanggungan"> jumlah tanggungan</label><br>
        <input type="number" id="tanggungan"> </input><br>
        <label for="hb"> harga</label><br>
        <input id="hb"> </input><br>
        <label for="tb"> total bayar</label><br>
        <input type="text" id="tb"> </input><br>

        <button type="submit" id="Tambah"> tambah</button><br>
    </form>
</body>
</html>