<?php
include 'dbase.php';
$db = new database();

$aksi = $_GET['aksi'];
 if($aksi == "add"){
   $nis = htmlspecialchars($_POST["nis"]);
   $nama = htmlspecialchars($_POST["nama"]);
   $jurusan = htmlspecialchars($_POST["jurusan"]);
 	$db->input($nis,$nama,$jurusan);
 	header("location:index.php");
 }elseif($aksi == "hapus"){
 	$db->hapus($_GET['id']);
	header("location:tampil.php");
 }elseif($aksi == "update"){
 	$db->update($_POST['id'],$_POST['nama'],$_POST['alamat'],$_POST['usia']);
 	header("location:tampil.php");
 }
?>
