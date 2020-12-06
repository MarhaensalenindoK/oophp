<?php
// Jualan Komik dan game

class Produk {
	public $judul = "Judul",
					$penulis = "Penulis",
					$penerbit = "Penerbit",
					$harga = 0;
// Method
	public function getLabel(){
		return "$this->penulis,$this->penerbit";
	}



}

// $produk1= new Produk();
// // Bisa Kita Timpa
// $produk1->judul = "Naruto";
// var_dump($produk1);
//
//
// $produk2 = new Produk();
// $produk2->judul = "PUBG";
// // AUTO TAMBAH PROPERTY
// $produk2->tambahProperty ="waktu";
// var_dump($produk2);

$produk3 = new produk();
$produk3->judul="AOT";
$produk3->penulis ="Hajime Isayama";
$produk3->penerbit ="Animeni";
$produk3->harga =30000;
// var_dump($produk3);



$produk4 = new Produk();
$produk4->judul = "PUBG";
$produk4->penulis="Tencent Games";
$produk4->penerbit="PUBG Official";
$produk4->harga=100000;

echo "Komik : ". $produk3->getLabel();
echo "<br>";
echo "Game : ". $produk4->getLabel();



 ?>
