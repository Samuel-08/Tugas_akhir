<?php
require'fungsi.php';
$hub = mysqli_connect("localhost","root","","univmulia");
$mahasiswa =query('SELECT * FROM administrator');

if (isset( $_POST["submit"]) ) {
     
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>TAMBAH DATA</h1>
        <section>
            <form action="" method="post">
                <ul>
                    <li>
                        <label for="nim">nim</label>
                        <input type="text" name="nim" id="nim">
                    </li>
                    <li>
                        <label for="nama">nama </label>
                        <input type="text" name="nama" id="nama">
                    </li>
                    <li>
                        <label for="email">email</label>
                        <input type="text" name="email" id="email">
                    </li>
                    <li>
                        <label for="jurusan">jurusan</label>
                        <input type="text" name="jurusan" id="jurusan">
                    </li>
                    <li>
                        <label for="prodi">prodi</label>
                        <input type="text" name="prodi" id="prodi">
                    </li>
                    <li>
                        <label for="tanggalLahir">tanggal lahir</label>
                        <input type="text" name="tanggalLahir" id="tanggalLahir">
                    </li>
                    <li>
                        <label for="umur">umur</label>
                        <input type="text" name="umur" id="umur">
                        <li>
                            <label for="jenisKelamin">jenis kelamin</label>
                            <input type="text" name="prodi" id="jenisKelamin">
                        </li>
                        <li>
                            <label for="alamat">alamat</label>
                            <input type="text" name="alamat" id="alamat">
                        </li>
                        <li>
                            <label for="status">status</label>
                            <input type="text" name="status" id="status">
                        </li>
                        <li>
                            <label for="gambar">gambar</label>
                            <input type="text" name="gambar" id="gambar">
                        </li>
                    <li>
                        <button name="submit" type="submit" value="submit" style="margin-top: 1rem;">TAMBAH</button>
                    </li>
                    </ul>
                </form>
            </section>
            <script src="" async defer></script>
        </body>
    </html>