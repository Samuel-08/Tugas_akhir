<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <title>List Book</title>
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
     <script src="js/bootstrap.min.js"></script>
</head>

<body>
     <div class="container-fluid mt-5 ">
          <h2 class="text-center mb-5">Daftar Alumni yang ada</h2>
          <div class="table-responsive table-responsive-lg table-responsive-md table-responsive-sm">
               <table class="table table-bordered shadow">
                    <tr class="shadow-sm alert-info">

                         <th>Nim</th>
                         <th>Nama</th>
                         <th>Email</th>
                         <th>Jurusan</th>
                         <th>Prodi</th>
                         <th>Tanggal Lahir</th>
                         <th>Umur</th>
                         <th>Jenis Kelamin</th>
                         <th>Alamat</th>
                         <th>Status</th>
                         <th>Gambar</th>
                         <th>Delete</th>
                         <th>Edit</th>

                    </tr>
                    <?php
                    require("Perpustakaan.php");
                    $khon = new penghubung();
                    $show = $khon->muncul();
                    while ($data = $show->fetch(PDO::FETCH_OBJ)) {
                         echo "
<tr>  
<td>$data->nim</td>
<td>$data->nama</td>
<td>$data->email</td>
<td>$data->jurusan</td>
<td>$data->prodi</td>
<td>$data->tanggalLahir</td>
<td>$data->umur</td>
<td>$data->jenisKelamin</td>
<td>$data->alamat</td>
<td>$data->statusHubungan</td>
<td>$data->gambar</td>


<td><a class='shadow btn btn-outline-danger' href='list.php?delete=$data->nim'>Delete</a></td>
<td><a class='shadow btn btn-outline-info' href='edit.php?nim=$data->nim'>Edit</td>
</tr>";
                    };


                    ?>
               </table>
          </div>
          <a href="home.php" class="shadow btn btn-outline-success mt-3 mb-3">Tambah alumni Baru</a>
     </div>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>

<?php

if (isset($_GET['delete'])) {

     $del = $khon->hapus($_GET['delete']);
}
?>