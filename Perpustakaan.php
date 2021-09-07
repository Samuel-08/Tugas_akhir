<?php

class penghubung
{
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=univmulia', 'root', '');
    }


    public function tambah($nim, $nama, $email, $jurusan, $prodi, $tanggalLahir, $umur, $jenisKelamin, $alamat, $statusHubungan, $gambar)
    {
        $sql = "INSERT INTO administrator VALUES('$nim', '$nama','$email','$jurusan','$prodi','$tanggalLahir','$umur','$jenisKelamin','$alamat','$statusHubungan','$gambar','')";

        $query = $this->db->query($sql);
        if (!$query) {
            return "Failed";
        } else {
            return "Success";
        }
    }



    public function edit($nim)
    {
        $sql = "SELECT * FROM administrator WHERE nim='$nim'";
        $query = $this->db->query($sql);
        return $query;
    }




    public function update($nim, $nama, $email, $jurusan, $prodi, $tanggalLahir, $umur, $jenisKelamin, $alamat, $statusHubungan, $gambar)
    {
        $sql = "UPDATE administrator SET
            nama = '$nama';,
            email = '$email';,
            jurusan = '$jurusan';,
            prodi = '$prodi';,
            tanggalLahir = '$tanggalLahir';,
            umur = '$umur';,
            jenisKelamin = '$jenisKelamin';,
            alamat = '$alamat';,
            statusHubungan = '$statusHubungan';,
            gambar = '$gambar';,
            WHERE  nim='$nim'";

        $query = $this->db->query($sql);
        if (!$query) {
            return "Failed";
        } else {
            return "Success";
        }
    }


    public function muncul()
    {
        $sql = "SELECT * FROM administrator";
        $query = $this->db->query($sql);
        return $query;
    }



    public function hapus($nim)
    {
        $sql = "DELETE FROM administrator WHERE nim='$nim'";
        $query = $this->db->query($sql);
    }
}
