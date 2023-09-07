<?php
// $mahasiswa = [
//     ["Ailsa Nabila", "043040023", "ailsanabila@gmail.com", "Manajemen Aset Publik"],
//     ["Amrita Nur", "034030014", "amritanur@gmail.com", "Sastra Jepang"], 
//     ["Cindi Novitasari", "023050021", "cindinov@gmail.com", "Kedokteran"]
// ];

//Array Associative
// definisinya sama dengan array numerik, kecuali
// key-nya adalah String yang kita buat sendiri 
$mahasiswa = [
    [
    "nama" => "Ailsa nabila", 
    "nrp" => "043040023",
    "email" => "ailsanabila@gmail.com",
    "jurusan" => "Manajemen Aset Publik",
    "gambar" => "lucas1.jpg"
    ],
    [
    "nama" => "Amrita Nur", 
    "nrp" => "034030014",
    "email" => "amritanur@gmail.com",
    "jurusan" => "Sastra Jepang",
    "gambar" => "lucaspp.jpg"
    ]
    ];
    // echo $mahasiswa[1] ["email"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>" alt="" width="150">
        </li>
        <li> Nama: <?= $mhs["nama"]; ?></li> 
        <li> NRP: <?= $mhs["nrp"]; ?></li>
        <li> Jurusan: <?= $mhs["jurusan"]; ?></li>
        <li> Email: <?= $mhs["email"]; ?></li>
    
    </ul>
    <?php endforeach ?>

</body>
</html>