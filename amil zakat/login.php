<?php
include("../koneksi.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Amil</title>
</head>
<body>
    <div>
        <form method="post">
            <label for="nama">Nama</label>
            <input name="nama" placeholder="masukan nama anda" required></input>
            <label for="pw">Password</label>
            <input name="pw" type="password" placeholder="masukan password" required></input>
            <button name="btn-login" type="submit">Login</button>
        </form>
        <?php
        if (isset($_POST['btn-login'])) {
            $username = htmlspecialchars($_POST['nama']);
            $pw = htmlspecialchars($_POST['pw']);
            $query = "SELECT * FROM `amil_zakat` where `nama_amil` = '$username' ";
            $user = "";
            $userpw = "";
            $cek = $db->cek_data($query);
            if ($username == "" && $pw == '') {
                ?>
                 <p>Pssword atau username tidak boleh kosong</p>
                <?php
            }else {
               if ($cek > 0) {
                $getData = $db->tampil_Data($query);
                foreach ($getData as  $value) {
                     $user=$value['nama_amil'];
                     $userpw = $value['password'];
                 }
                 if ($userpw == $pw) {
                    $_SESSION['username'] = $user;
                    $_SESSION['login'] = true;
                    header('location: index.php');
                 }else{
                    ?>
                        <p>Pssword salah</p>
                    <?php
                 }
               }else{
                ?>
                    <p>belum terdaftar silahkan hubungi pihak admin 085155119213</p>
                <?php
               }
            }
            
        }
        ?>
    </div>
</body>
</html>