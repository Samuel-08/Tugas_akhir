<?php 

//koneksi
$hub = mysqli_connect("localhost", "root", "", "univmulia");


//tambah data
function query($coding){
	global $hub;
	$result = mysqli_query($hub, $coding);
	$rowss = [];
	while( $roww = mysqli_fetch_assoc($result) ){
		$rowss[] = $roww;

	}
	return $rowss;
}


function tambah($data)
  $nama = $roww["nama"];
        $nama = $roww["nim"];
        $nama = $roww["email"];
        $nama = $roww["jurusan"];
        $nama = $roww["prodi"];
        $nama = $roww["tanggalLahir"];
        $nama = $roww["umur"];
        $nama = $roww["jenisKelamin"];
        $nama = $roww["alamat"];
      $nama = $roww["status"];
   $nama= $roww["gambar"];
 $query = "INSERT INTO administrator VALUES 
('',$nama = $nim'
         email'
         $jurusan'

         f
 $prodi'
         $tanggalLahir'
         $umur'
         $jenisKelamin'
         $alamat'
       $status'
   $nama= $roww["gambar'

)
 "
 ?>
