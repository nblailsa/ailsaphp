<!-- <?php 
// $_GET
$_GET["nama"] = "Ailsa Nabila";
var_dump($_GET);

?>  -->

<?php
$mahasiswa = [
    [
    "nama" => "Ailsa Nabila",
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1> 
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?> 
    <li>
        <a href="latihan3.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"];?>&jurusan=<?= $mhs["jurusan"];?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?> </a>
    </li>
<?php endforeach; ?>
</ul>


</body>
</html>