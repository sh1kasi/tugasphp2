<?php 

$data = [
    [
        "gmbr" => "amel.png",
        "nama" => "Amelia",
        "alamat" => "Darmo",
        "no" => "8850"
    ],
    [
        "gmbr" =>"muna1.png",
        "nama" => "Moona",
        "alamat" => "Lidah",
        "no" => "8851"
    ],
    [
        "gmbr" =>"korone.png",
        "nama" => "Korone",
        "alamat" => "Wonokromo",
        "no" => "8852"
    ]
]

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

    <h2>Data Siswa (siswa)</h2>

    <table border="1" cellspacing="1" cellpadding="3">
    <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
            <?php foreach($data as $id => $value) :?>
            <tr align="center">
                <td><?= $id + 1?></td>
                <td><img src="<?= $value['gmbr'];?>" alt=""></td>
                <td><?= $value['nama']?></td>
                <td>
                    <a href="detail.php?nama=<?=$value["nama"];?>&alamat=<?=$value["alamat"];?>&no=<?=$value["no"];?>&gmbr=<?=$value["gmbr"]?>">
                        <button>Detail</button>
                    </a>
                </td>
            </tr>

        <?php endforeach?>
    </table>

   
    
</body>
</html>