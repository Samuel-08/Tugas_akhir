<?php
//koneksi
$hub = mysqli_connect("localhost", "root", "", "univmulia");
//tambah data
function query($query){
    global $hub;
    $result = mysqli_query($hub, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
global $hub;
$nim = $data["nim"];
$nama = $data["nama"];
$email = $data["email"];
$jurusan = $data["jurusan"];
$prodi = $data["prodi"];
$tanggalLahir = $data["tanggalLahir"];
$umur = $data["umur"];
$jenisKelamin = $data["jenisKelamin"];
$alamat = $data["alamat"];
$status = $data["status"];
$gambar = $data["gambar"];
$query = "INSERT INTO administrator
VALUES ('','$nim','$email','$jurusan','$prodi','$tanggalLahir','$umur','$jenisKelamin','$alamat','$status','$gambar')";
mysqli_query($hub, $query);
return mysqli_affected_rows($hub);
}
?>