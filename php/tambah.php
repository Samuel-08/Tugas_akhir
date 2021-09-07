<?php
require 'fungsi.php';
if( isset($_POST["submit"]) ) {

if( mysqli_affected_rows($hub) > 0 ) {
//mengecek eror pada saat selesai input data
echo "<script>
alert('data berhasil di tambah');
document.location.href = 'index.php';
</script>";
}
else {
echo "<script>
alert('data gagal di tambah');
document.location.href = 'index.php';
</script>";

}
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>tambah</title>          <!-- Bootstrap CSS -->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">   -->
    </head>
    <body>
        <h1>TAMBAH DATA</h1>
        <section >
            <form action="" method="post" >
                <ul>
                    <li>
                        <label for="nim">nim    :</label>
                        <input type="text" name="nim" id="nim">
                    </li>
                    <li>
                        <label for="nama">nama  :</label>
                        <input type="text" name="nama" id="nama">
                    </li>
                    <li>
                        <label for="email">email    :</label>
                        <input type="text" name="email" id="email">
                    </li>
                    <li>
                        <label for="jurusan">jurusan    :</label>
                        <input type="text" name="jurusan" id="jurusan">
                    </li>
                    <li>
                        <label for="prodi">prodi    :</label>
                        <input type="text" name="prodi" id="prodi">
                    </li>
                    <li>
                        <label for="tanggalLahir">tanggal lahir :</label>
                        <input type="date" name="tanggalLahir" id="tanggalLahir">
                    </li>
                    <li>
                        <label for="umur">umur  :</label>
                        <input type="text" name="umur" id="umur">
                        <li>
                            <label for="jenisKelamin">jenis kelamin :</label>
                            <input type="text" name="jenisKelamin" id="jenisKelamin">
                        </li>
                        <li>
                            <p for="alamat" style="cursor: default;">alamat
                            <textarea    name="alamat" id="alamat" rows="1" cols="28"></textarea></p>
                        </li>
                        <li>
                            <label for="status">status  :</label>
                            <input type="text" name="status" id="status">
                        </li>
                        <li>
                            <label for="gambar">gambar  :</label>
                            <input type="text" name="gambar" id="gambar">
                        </li>
                        <li>
                            <button type="submit" name="submit"  style="margin-top: 1rem;">TAMBAH</button>
                        </li>
                    </ul>
                </form>
            </section>
            <script src="" async defer></script>
        </body>
    </html>