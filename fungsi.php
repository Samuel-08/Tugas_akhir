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

 ?>