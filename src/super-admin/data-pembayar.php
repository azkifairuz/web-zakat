<?php
    include("../koneksi.php");
    include("session.php");
    include("navbar.php")

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembayar Zakat</title>
    <link rel="stylesheet" href="../../dist/output.css">
</head>

<body>
    <div class="w-[80%] p-5 bg-gray-200 rounded-lg shadow-lg border border-black mx-auto mt-10">
    <table class="w-full border border-black bg-white rounded-md">
        <thead class="border border-black">
            <th class="border border-black">No</th>
            <th class="border border-black">Nama</th>
            <th class="border border-black">Tanggungan Jiwa</th>
            <th class="border border-black">Harga Beras</th>
            <th class="border border-black">Total Bayar</th>
            <th class="border border-black">Nama Amil</th>
        </thead>
        <?php
            $query = "SELECT *, harga_beras.harga_beras FROM pembayar_zakat INNER JOIN harga_beras ON pembayar_zakat.id_beras=harga_beras.id;";
            $get = $db->tampil_Data_Banyak($query);
            $no = 1;
            foreach ($get as $value) {
        ?>
            <tr>
                <td class="border border-black p-2"><?php echo $no ?></td>
                <td class="border border-black p-2"><?php echo $value['nama']?></td>
                <td class="border border-black p-2"><?php echo $value['tanggungan']?></td>
                <td class="border border-black p-2"><?php echo $value['harga_beras']?></td>
                <td class="border border-black p-2"><?php echo $value['total_bayar']?></td>
                <td class="border border-black p-2"><?php echo $value['nama_amil']?></td>
            </tr>
        <?php
            $no++;
            }
        ?>
    </table>
    </div>
</body>

</html>