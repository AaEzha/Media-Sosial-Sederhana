<?php
include 'db.php';
// inisialisasi
$db = new Database();
$db->connect();

if(isset($_POST['nama'])){
	$id = $db->escapeString(trim($_POST['id']));
	$nama = $db->escapeString(trim($_POST['nama']));
	$pesan = $db->escapeString(trim($_POST['pesan']));

	$query = $db->insert('postingan',array(
									'parent' => $id, 
									'nama' => $nama,
									'pesan' => $pesan,
									'waktu' => date('Y-m-d H:i:s')
								));

	if($query){
		// jika berhasil
		echo "<script>window.location='komentar.php?id=".$id."';</script>";
	}else{
		// jika gagal
		echo "<script>alert('Pesan Anda gagal terkirim');</script>";
		echo "<script>window.location='komentar.php?id=".$id."';</script>";
	}
}else{
	echo "<script>window.location='index.php';</script>";
}

?>