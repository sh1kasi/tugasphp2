<?php 

$data = [
    [
        "gmbr" => "amel.png",
        "nama" => "Amelia"
    ],
    [
        "gmbr" =>"muna1.png",
        "nama" => "Moona"
    ],
    [
        "gmbr" =>"korone.png",
        "nama" => "Korone"
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
            </tr>
        <?php foreach ($data as $x => $value) : ?>
           
            <tr align="center">
                <td>
                    <?= $x + 1 ?>
                </td>
                <td>
                    <img src="<?= $value ['gmbr']; ?>" alt="">
                 </td>
                <td>
                    <?= $value ['nama']; ?>
                </td>
            </tr>
            <?php endforeach ?>
    </table>

   
    
</body>
</html>