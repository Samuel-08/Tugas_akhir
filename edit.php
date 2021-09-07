 <?php
    require('Perpustakaan.php');

    if (isset($_GET['nim'])) {

        $Lib = new penghubung();

        $book = $Lib->edit($_GET['nim']);
        $edit = $book->fetch(PDO::FETCH_OBJ);

        echo '
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Book</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h2>Ubah Data Buku</h2>

<form action="" method="POST" class="form-group">


nim  : 
<input type="text" name="nim" value="' . $edit->nim . '" class="form-control" ><br>
nama
<input type="text" name="nama" value="' . $edit->nama . '" class="form-control"><br>
email
<input type="email" name="pengarang" value="' . $edit->email . '" class="form-control"><br>
jurusan
<input type="text" name="penerbit" value="' . $edit->jurusan . '" class="form-control"><br>

prodi
<input type="text" name="nim" value="' . $edit->prodi . '" class="form-control"><br>
tanggalLahir
<input type="date" name="tanggalLahir" value="' . $edit->tanggalLahir . '" class="form-control"><br>
 
jenis Kelamin
            <div class="form-check">
                <label for="pria" class="form-check-label">
                    <input type="radio" id="pria" name="jenisKelamin" value="' . $edit->jenisKelamin . '" class="form-check-input">pria<br>
                </label>
            </div>
            <div class="form-check">
                <label for="perempuan" class="form-check-label">
                    <input type="radio" id="jenisKelamin" name="jenisKelamin" value="' . $edit->jenisKelamin . '" class="form-check-input">perempuan<br>
                </label>
            </div> 
umur
<input type="text" name="umur" value="' . $edit->umur . '" class="form-control"><br>

alamat
<input type="comment" name="alamat" value="' . $edit->alamat . '" class="form-control"><br>

status
<input type="text" name="statusHubungan" value="' . $edit->statusHubungan . '" class="form-control"><br>

gambar <br>
<input type="file" name="gambar" class="form-control-file" value="' . $edit->gambar . '" id="gambar">


<button type="submit" name="submit" value="update" class="btn btn-info mt-3">Perbarui</button>
 

</form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
';
    }
    if (isset($_POST["submit"])) {
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
        $upd = $Lib->update($nim, $nama, $email, $jurusan, $prodi, $tanggalLahir, $umur, $jenisKelamin, $alamat, $statusHubungan, $gambar);
        if ($upd == "Success") {
            header('Location: list.php');
        } else {

            echo "<script>
            alert('gagal di perbarui');
            document.location.href = 'home.php';
            </script>";
        }
    }
    ?>