<?php

if(isset($_POST["submit"])){
class Siswa{
  public $nama,
          $nis,
          $kelas;

  public function __construct($nama = "Nama" , $nis = "NIS" , $kelas = "Kelas"){
    $this->nama = $nama;
    $this->nis  =$nis;
    $this->kelas =$kelas;
  }
  public function cetakIden(){
    $str = "NAMA : {$this->nama} <br>NIS : {$this->nis} <br>KELAS : {$this->kelas}";
    return $str;
  }

}


$nama = $_POST["nama"];
$nis = $_POST["nis"];
$kelas = $_POST["kelas"];

$siswa1 = new Siswa($nama,$nis,$kelas);


}
 ?>
