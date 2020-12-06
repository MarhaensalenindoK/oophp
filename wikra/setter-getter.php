<?php
class Person{
  private $nama,$usia,$pekerjaan,$alamat;
    // buat method setter
    public function setNama($a){
      $this->nama = $a;
    }
    public function setUsia($a){
      $this->usia = $a;
    }
    public function setPekerjaan($a){
      $this->pekerjaan = $a;
    }
    public function setAlamat($a){
      $this->alamat = $a;
    }
    // buat method getter
    public function getNama(){
      return $this->nama;
    }
    public function getUsia(){
      return $this->usia;
    }
    public function getPekerjaan(){
      return $this->pekerjaan;
    }
    public function getAlamat(){
      return $this->alamat;
    }


}


// buat objek person
$person = new person;
//masukan nama dalam set nama
$person->setNama("Marhaensalenindo Komara");
$person->setUsia("16 Tahun");
$person->setPekerjaan("Siswa");
$person->setAlamat("Bogor Utara");

// Tampilkan nama yang sudah di set
echo "Nama saya : <strong>".$person->getNama()."</strong> <br />";
echo "Usia : <strong>".$person->getUsia()."</strong> <br />";
echo "Pekerjaan : <strong>".$person->getPekerjaan()."</strong> <br />";
echo "Alamat : <strong>".$person->getAlamat()."</strong> <br />";


 ?>
