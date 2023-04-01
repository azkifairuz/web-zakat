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
    <title>Data Amil</title>
    <link rel="stylesheet" href="../../dist/output.css">
</head>

<body>
    <div class="w-[80%] p-5 bg-gray-200 rounded-lg shadow-lg border border-black mx-auto mt-10 ">
        <table class="w-full border border-black bg-white rounded-md">
            <thead class="border border-black">
                <th class="border border-black">No</th>
                <th class="border border-black">nama amil</th>
                <th class="border border-black w-[30%]">Action</th>
            </thead>
            <?php
                $query = "SELECT * FROM `amil_zakat`";
                $get = $db->tampil_Data_Banyak($query);
                $no = 1;
                foreach ($get as $value) {
            ?>
                <tr>
                    <td class="border border-black p-2 "><?php echo $no ?></td>
                    <td class="border border-black p-2 w-[50%]"><?php echo $value['nama_amil']?></td>
                    <td class="border border-black p-2  text-center flex gap-2 justify-center">
                        <a href="edit-amil.php?p=<?php echo $value['id']; ?>" class=" cursor-pointer text-center rounded-sm  bg-blue-400 text-white py-2 px-4">Edit</a>
                        <span class="text-2xl block">|</span>
                        <a href="hapus-amil.php?p=<?php echo $value['id']; ?>" class=" cursor-pointer text-center rounded-sm  bg-red-400 text-white py-2 px-4">Hapus</a>
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