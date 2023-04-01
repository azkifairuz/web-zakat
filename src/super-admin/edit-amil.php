<?php 
    include("../koneksi.php");
    include("session.php");
    include("navbar.php");
    $idAmil = $_GET['p'];
    $getAmil = $db->tampil_Data_Satu("SELECT * FROM `amil_zakat` where `id` = '$idAmil' ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../dist/output.css">
</head>
<body>
    <div class="p-8 mx-auto">
        <form action="" method="post" class="flex flex-col gap-5 w-[300px]  mx-auto"  >
            <h1>Nama Amil</h1>
            <input type="text" name="NA" value="<?php echo $getAmil['nama_amil']?>" class="border border-black p-2  rounded-lg"><br>
            <h1>Password</h1>
            <input type="password" name="PW" placeholder="*****" class="border border-black p-2  rounded-lg"><br>

            <button type="submit" name="tambah" class="bg-blue-500 hover:bg-blue-300 text-white py-3 px-4 rounded-lg" >Tambah</button>
        </form>
        <?php 
            if (isset($_POST["tambah"])) {
                
                $nama=htmlspecialchars($_POST["NA"]);
                $pw=htmlspecialchars($_POST["PW"]);
                $cek = $db->cek_data("SELECT * FROM `amil_zakat` where `nama_amil` = '$nama'");
                $masuk="`amil_zakat` SET `nama_amil`='$nama',`password`='$pw'";
                $db->Update($masuk,$idAmil);
                if ($cek < 1) {
                    ?>
                        <div class="bg-green-500 border-2 border-green-800 w-[300px] mt-5 mx-auto text-center  py-2 px-4">Berhasil</div>
                        <meta http-equiv="refresh" content="2; url=data-amil.php"/>
                   <?php
                }else {
                    ?>
                        <div class="bg-red-500 border-2 border-red-800 w-[300px] mt-5 mx-auto text-center  py-2 px-4">Nama Amil sudah Ada</div>
                        <meta http-equiv="refresh" content="2; url=index.php"/>
                   <?php
                }
            }
        ?>
    </div>
</body>
</html>
