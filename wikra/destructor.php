<?php
class Produk{
  public $namabarang,
  		$merk,
  		$harga;
  // INI CONSTRUCTOR
 public function __construct($namabarang = "Nama Barang",$merk= "merk",$harga=0){
   $this->namabarang = $namabarang;
   $this->merk = $merk;
   $this->harga = $harga;
   }
 public function cetak(){
 	return "$this->namabarang, $this->merk , $this->harga";
 }
 // INI DESTRUCTOR
 public function __destruct(){
   echo "Ini ketika program selesai atau dihapus";
 }
}
$produk1 = new Produk("Laptop");
echo "BARANG : " . $produk1->cetak();
echo "<br><br>"
 ?>
