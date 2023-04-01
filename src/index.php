<?php
include("koneksi.php");
$queryHarga = "SELECT * FROM `harga_beras` ";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../dist/output.css">
</head>
<body>
        <div class="w-[300px] my-[100px] mx-auto flex flex-col gap-5 justify-center items-center h-[300px] border border-black rounded-lg p-8">
            <h1 class="text-2xl">Login Sebagai</h1>
            <a href="./super-admin"><button class="text-white cursor-pointer bg-blue-500 hover:bg-black py-2 px-4 rounded-lg">Admin</button></a>
            <a href="./amil-zakat"><button class="text-white cursor-pointer bg-blue-500 hover:bg-black py-2 px-4 rounded-lg">Amil</button></a>
        </div>
</body>

</html>