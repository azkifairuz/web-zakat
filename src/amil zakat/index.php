<?php
include("../koneksi.php");
include("session.php");
$amil = $_SESSION['username'];
$queryHarga = "SELECT * FROM `harga_beras` ";
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
   <div class="p-8 mx-auto border border-black rounded-2xl w-fit mt-10 mb-5">
    <form method="post"  class="flex flex-col gap-2 w-[300px]  mx-auto">
            <label for="nama"> nama pembayar</label><br>
            <input name="nama" class="border border-black p-2  rounded-lg"></input><br>
            <label for="tanggungan"> jumlah tanggungan</label><br>
            <input type="number" name="tanggungan" class="border border-black p-2  rounded-lg"> </input><br>
            <label for="hb"> harga beras</label><br>
            <select name="hb" class="border border-black p-2  rounded-lg"> 
                <?php 
                foreach ($db->tampil_Data_Banyak($queryHarga) as $value) {
                    ?>
                    <option value="<?php echo $value['id'] ?>">Rp.<?php echo number_format($value['harga_beras']);?></option>
                    <?php
                }
                ?>
            </select><br>
            </input><br>
            <label for="na"> nama amil</label><br>
            <input type="text" class="border border-black p-2  rounded-lg" readonly name="na" value="<?php echo $amil ?>"> </input><br>

            <button type="submit" name="Tambah"  class="bg-blue-500 hover:bg-blue-300 text-white py-3 px-4 rounded-lg"> tambah</button><br>
        </form>
   </div>
    <?php
    if (isset($_POST["Tambah"])) {
        $nama = htmlspecialchars($_POST["nama"]);
        $tanggungan = htmlspecialchars($_POST["tanggungan"]);
        $hb = htmlspecialchars($_POST["hb"]);
        $harga_beras = $db->tampil_Data_Satu("SELECT * FROM `harga_beras`WHERE `id` = $hb ");
        $tb = intval($harga_beras['harga_beras']) * intval($tanggungan) * 4.3;
        $na = htmlspecialchars($_POST["na"]);

        $queryInsert = "`pembayar_zakat`(`nama`, `tanggungan`, `id_beras`, `total_bayar`,`nama_amil`) VALUES ('$nama','$tanggungan','$hb','$tb','$na')";
        $db->Insert($queryInsert);
        ?>
            <meta http-equiv="refresh" content="0; url=index.php"/>
        <?php
    }
    ?>
    <div class="w-[80%] p-5 bg-gray-200 rounded-lg shadow-lg border border-black mx-auto mt-10">
        <h1 class="text-2xl my-5 text-center"  >zakat adalah hadil perkalian:jumlah tanggungan x harga beras(2kg) x 4.3</h1>
        <table class="w-full border border-black bg-white rounded-md">
            <thead class="border border-black">
                <th class="border border-black">no</th>
                <th class="border border-black">Nama</th>
                <th class="border border-black">Tanggungan</th>
                <th class="border border-black">harga beras yg biasa dibeli (2kg)</th>
                <th class="border border-black">total harga</th>
                <th class="border border-black">nama amil</th>
            </thead>
                <?php
                
                $query = "SELECT *, harga_beras.harga_beras FROM pembayar_zakat INNER JOIN harga_beras ON pembayar_zakat.id_beras=harga_beras.id;";
                $no = 1;
                foreach ($db->tampil_Data_Banyak($query) as  $value) {
                    ?>
                    <tr>
                            <td class="border border-black p-2">
                                <?php echo $no?>
                            </td>
                            <td class="border border-black p-2">
                                <?php echo $value['nama'] ?>
                            </td>
                            <td class="border border-black p-2">
                                <?php echo $value['tanggungan'] ?>
                            </td>
                            <td class="border border-black p-2">
                                <?php echo $value['harga_beras'] ?>
                            </td>
                            <td class="border border-black p-2">
                            Rp. <?php echo number_format($value['total_bayar']) ?>
                            </td>
                            <td class="border border-black p-2">
                                <?php echo $value['nama_amil'] ?>
                            </td>
                        </tr>
                
                    
                    <?php
                    $no++;
                }
                ?>
            

        </table>
    </div>
</body>

</html>