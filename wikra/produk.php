<?php
class produk{
public $namabarang = "Handphone" ,
		$merk= "Samzum" ,
		$harga= 3000000 ;


// public function sayhello(){
// 	return  "Hallo RPL";
// }

public function cetak(){
	return "$this->namabarang, $this->merk , $this->harga";
}




}


//
// $produk1 = new produk();
// $produk1->namabarang = "Flashdisk";
// var_dump($produk1);

// echo "<br>";

$produk2 = new produk();
$produk2->namabarang = "Mouse";
$produk2->warna = "biru";
echo "NAMA BARANG 1: " . $produk2->cetak();
 echo "<br>";

$produk3 = new produk();
$produk3->namabarang = "Flashdisk";
$produk3->merk = "Lenovo";
$produk3 -> harga = 50000;
echo "NAMA BARANG 2: " . $produk3->cetak();




 ?>
