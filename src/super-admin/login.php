<?php
include("../koneksi.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="../../dist/output.css">
</head>
<body>
    <div class="w-[300px] border border-black rounded-2xl p-6 mx-auto my-[100px]">
        <h1 class="text-2xl mb-5">Login Admin</h1>
        <form method="post" class="flex flex-col gap-5">
            <label for="nama">username</label>
            <input name="nama" placeholder="masukan nama anda" required class="border border-black rounded-lg p-2"></input>
            <label for="pw">Password</label>
            <input name="pw" type="password" placeholder="masukan password"  class="border border-black rounded-lg p-2" required></input>
            <button name="btn-login" type="submit" class="bg-blue-500 px-4 py-2 text-white rounded-lg">Login</button>
        </form>
        <?php
        if (isset($_POST['btn-login'])) {
            $username = htmlspecialchars($_POST['nama']);
            $pw = htmlspecialchars($_POST['pw']);
            $query = "SELECT * FROM `super_admin` where `username` = '$username' ";
            
            $cek = $db->cek_data($query);
            if ($username == "" && $pw == '') {
                ?>
                 <p>Pssword atau username tidak boleh kosong</p>
                <?php
            }else {
               if ($cek > 0) {
                $getData = $db->tampil_Data_Satu($query);
                $userpw = $getData['password'];
                $user = $getData['username'];
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
                    <p>tida terdaftar sebagai admin</p>
                <?php
               }
            }
            
        }
        ?>
    </div>
</body>
</html>