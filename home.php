<?php
require('Perpustakaan.php');
if (isset($_POST['tambah'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $jurusan = $_POST['jurusan'];
    $prodi = $_POST['prodi'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $umur = $_POST['umur'];
    $jenisKelamin = $_POST['jenisKelamin'];
    $alamat = $_POST['alamat'];
    $statusHubungan = $_POST['statusHubungan'];
    $gambar = $_POST['gambar'];



    $Lib = new penghubung();
    $add = $Lib->tambah($id, $nim, $nama, $email, $jurusan, $prodi, $tanggalLahir, $umur, $jenisKelamin, $alamat, $statusHubungan, $gambar);
    if ($add == "Success") {
        header('Location: List.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Book</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> -->
    <script src="js/bootstrap.min.js"></script>
</head>

<body class="alert-secondary">
    <div class="container">
        <h2 class="mt-4 text-center display-4 shadow-sm mb-4 alert-light rounded">Tambah Alumni Baru</h2>
        <form action="home.php" method="POST" class="form-group mx-sm-3 mb-2 mx-sm-3">
            nim
            <input type="text" name="nim" class="form-control" placeholder="nim"><br>

            nama
            <input type="text" name="nama" class="form-control" placeholder="nama"><br>

            email
            <input type="email" name="email" class="form-control" placeholder="email"><br>

            jurusan
            <input type="text" name="jurusan" class="form-control" placeholder="jurusan"><br>

            prodi
            <input type="text" name="prodi" class="form-control" placeholder="prodi"><br>

            tanggal Lahir
            <input type="date" name="tanggalLahir" class="form-control" placeholder="tanggal lahir"><br>

            umur
            <input type="text" name="umur" class="form-control" placeholder="umur"><br>

            jenis Kelamin
            <div class="form-check">
                <label for="pria" class="form-check-label">
                    <input type="radio" id="pria" name="jenisKelamin" value="pria" class="form-check-input">pria<br>
                </label>
            </div>
            <div class="form-check">
                <label for="perempuan" class="form-check-label">
                    <input type="radio" id="jenisKelamin" name="jenisKelamin" value="perempuan" class="form-check-input">perempuan<br>
                </label>
            </div>

            <div class="form-grup">
                <label for="alamat">alamat
                    <textarea name="alamat" class="form-control" id="alamat" cols="90" rows="2" placeholder="alamat"></textarea>
                </label>
            </div>

            status
            <input type="text" name="statusHubungan" class="form-control" placeholder="lajang/bekeluarga/janda/duda"><br>



            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" class="form-control-file" id="gambar">
            </div>



            <button type="submit" name="tambah" value="tambah data" class="btn btn-success mb-5 mt-3">tambah data</button>
            <button type="reset" value="Hapus semua" class="btn btn-warning ml-3 mt-3 mb-5">Hapus semua</button>

        </form>
    </div>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> -->
</body>

</html>