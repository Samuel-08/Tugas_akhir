
<?php 

//koneksi
$hub = mysqli_connect("localhost", "root", "", "univmulia");
 ?>



 

<?php
require 'fungsi.php';
//ambil data
$result = mysqli_query($hub, "SELECT * FROM administrator");
//memunculkan error
/*
if(!$result){
echo mysqli_error($result);
}
*/
//mengecek bug
//var_dump($result);
/*
while ($administrator = mysqli_fetch_assoc($result)) {
var_dump($administrator);
}
*/
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">  
    <title>Halaman Utama</title>
    <style>
    h1{
    margin-top: 0.9em;
    }
    </style>
  </head>
  <body>
    <center><h1>Halaman HTML</h1>
    
    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>no</th>
        <th>aksi</th>
        <th>nama</th>
        <th>nim</th> 
        <th>email</th>
        <th>jurusan</th>
        <th>prodi</th>
        <th>tanggal lahir</th>
        <th>umur</th>
        <th>jenis Kelamin</th>
        <th>alamat</th>
        <th>status</th>
        <th>gambar</th>
      </tr>
      <?php $i = 1; ?>
      <?php while ($roww = mysqli_fetch_assoc($result) ): ?>
      
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href="">ubah</a>
          <hr>
          <a href="">hapus</a>
        </td>
        <td><?= $roww["nama"]; ?> </td>
        <td><?= $roww["nim"]; ?> </td>
        <td><?= $roww["email"]; ?> </td>
        <td><?= $roww["jurusan"]; ?> </td>
        <td><?= $roww["prodi"]; ?> </td>
        <td><?= $roww["tanggalLahir"]; ?> </td>
        <td><?= $roww["umur"]; ?> </td>
        <td><?= $roww["jenisKelamin"]; ?> </td>
        <td><?= $roww["alamat"]; ?> </td>
        <td><?= $roww["status"]; ?> </td>
        <td><img src="img/<?= $roww["gambar"]; ?>" width="15"></td>
      </tr>
      <?php  $i++; ?>
      <?php endwhile; ?>
    </table>
    
    </center>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    
  </body>
</html>