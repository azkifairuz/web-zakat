<?php 
    include("../koneksi.php");
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
    <form action="" method="post">
        Nama Amil: <input type="text" name="NA"><br>
        Password: <input type="password" name="PW"><br>

        <button type="submit" name="tambah">Tambah</button>
    </form>
    <?php 
        if (isset($_POST["tambah"])) {
            $nama=htmlspecialchars($_POST["NA"]);
            $pw=htmlspecialchars($_POST["PW"]);
            $masuk="`amil_zakat`(`nama_amil`, `password`) VALUES ('$nama','$pw')";
            $db->Insert($masuk);
            echo"berhasil hore hore";
        }
    ?>
</body>
</html>
