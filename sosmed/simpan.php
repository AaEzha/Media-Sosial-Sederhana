<?php
include 'db.php';
// inisialisasi
$db = new Database();
$db->connect();

if(isset($_POST['nama'])){
	$nama = $db->escapeString(trim($_POST['nama']));
	$pesan = $db->escapeString(trim($_POST['pesan']));

	$query = $db->insert('postingan',array(
									'parent' => '0', 
									'nama' => $nama,
									'pesan' => $pesan,
									'waktu' => date('Y-m-d H:i:s')
								));

	if($query){
		// jika berhasil
		echo "<script>window.location='index.php';</script>";
	}else{
		// jika gagal
		echo "<script>alert('Pesan Anda gagal terkirim');</script>";
		echo "<script>window.location='index.php';</script>";
	}
}else{
	echo "<script>window.location='index.php';</script>";
}

?>