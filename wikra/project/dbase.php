<?php



class database{

	var $host = "localhost";
	var $root = "root";
	var $pass = "";
	var $db = "smkwikrama";

	function __construct(){
		mysqli_connect($this->host, $this->root, $this->pass,$this->db);
	}
	function tampil_data(){
	$conn=mysqli_connect($this->host, $this->root, $this->pass,$this->db);
	$data = mysqli_query($conn,"SELECT * FROM siswa");
	while($row = mysqli_fetch_array($data)){
		$rows[] = $row;
	}
	return $rows;
}
function input($nis,$nama,$jurusan){
	$conn=mysqli_connect($this->host, $this->root, $this->pass,$this->db);
		mysqli_query($conn,"INSERT INTO siswa VALUES('','$nis','$nama','$jurusan')");
	}

}



// function tambah($data){
// 	global $conn;
// 	// AMBIL DATA DARI SETIAP ELEMEN DALAM FORM
// 	$nis = htmlspecialchars($data["nis"]);
// 	$nama = htmlspecialchars($data["nama"]);
// 	$jurusan = htmlspecialchars($data["jurusan"]);
//
// 	// CEK NRP
// 	$result = mysqli_query($conn,"SELECT nis FROM siswa WHERE nis = '$nis'");
	// if (mysqli_fetch_assoc($result)) {
	// 	echo "<script>
	// 			alert('NIS yang dipilih sudah terdaftar');
	// 			</script>";
	// 			return false;
	// }
//
//
//
//
// 	// QUERY INSERT DATA
// 	$query = "INSERT INTO siswa VALUES('','$nama','$nis','$jurusan')";
//
//
// 	mysqli_query($conn,$query);
//
// 	return mysqli_affected_rows($conn);
//
//
// }

 ?>
