<?php


$data = [
    [
        "img" => "1.jpg",
        "nama" => "Liel"
    ],
    [
        "img" => "1.jpg",
        "nama" => "Adit"
    
    ]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>
    <h1>Data Siswa</h1>
    <table border="1" cellpadding="3" cellspacing="1" width="40%">
        <tr align="center">
            <th>No</th>
            <th>Foto</th>
            <th>Nama</th>
        </tr>
        <?php foreach($data as $id => $nama) :?>
            <tr align="center">
                <td><?= $id + 1?></td>
                <td><img src="1.jpg" width="250" alt=""></td>
                <td><?= $nama['nama']?></td>
            </tr>

        <?php endforeach?>
    </table>
</body>
</html>