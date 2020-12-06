<?php
// Koneksi ke DBMS
require 'dbase.php';


// // cekkk
// if(isset($_POST["submit"])){
//
// 	// ==PENTING NIH==
// 	// == CEK APAKAH DATA BERHASIL DI TAMBAHKAN ATAU TIDAK ==
// 	if(tambah($_POST) > 0){
// 		echo "<script>
// 	var tanya =	confirm('DATA BERHASIL DITAMBAHKAN , KLIK OKE UNTUK KEMBALI KE MENU!');
// 	if(tanya === true){document.location.href = 'index.php';}
//
// 		</script>";
// 	}else{
// 		echo "<script>
// 		alert('DATA GAGAL DITAMBAHKAN');
// 		document.location.href = 'index.php';
// 		</script>";
// 	}
// }
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>ADD DATA MAHASISWA</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


	<style type="text/css">
		.center{
			margin-left: 35%;
		}

	</style>
</head>
<body>
<h1 style="text-align: center;">ADD DATA MAHASISWA</h1>

<form action="process.php?aksi=add" method="post" enctype="multipart/form-data">

	<div class="center">
		<div class="form-group mx-sm-5 mb-2">
	    <label for="nis">NIS</label>
	    <input type="text" name="nis" class="form-control" id="nis"  placeholder="Enter NIS" style="width: 150px;" required>

	  	</div>

		<div class="form-group mx-sm-5 mb-2">
	    <label for="nama">Name</label>
	    <input type="text" name="nama" class="form-control" id="nama"  placeholder="Enter Name" style="width: 300px;" required>

	  	</div>


		<div class="form-group mx-sm-5 mb-2">
	    <label for="jurusan">Jurusan</label>
	    <input type="text" name="jurusan" class="form-control" id="jurusan"  placeholder="Enter Majors" style="width: 300px;" required>

	  	</div>

			<button type="submit"  class="btn btn-danger ml-5 mt-3" name="submit">Submit</button>

	</div>



</form>


</body>
</html>
