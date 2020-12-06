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
echo $siswa1->cetakIden();

}
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Percobaan</title>
   </head>
   <body>
     <form action="" method="post">
       <input type="text" name="nama" placeholder="Nama...">
       <input type="text" name="nis" placeholder="NIS...">
       <input type="text" name="kelas" placeholder="Kelas...">
       <br><br>
       <button type="submit" name="submit">Submit</button>


     </form>
   </body>
 </html>
