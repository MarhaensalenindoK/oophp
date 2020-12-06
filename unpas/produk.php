<?php 
// Jualan Produk Gaiss
// Komik
// Game

class Produk{
	public $judul = "Judul",
	 $penulis = "Penulis" ,
	 $penerbit = "Penerbit" ,
	 $harga= 0;




	 public function getlabel(){

	 	return "$this->penulis,$this->penerbit";
	 }

}
// $produk1 = new Produk();
// $produk1->judul="Naruto";
// var_dump($produk1);


// $produk2 = new produk();
// $produk2->judul = "PUBG";
// $produk2->tambahproperty = "Hahaha";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi";
$produk3->penerbit = "RCTI";
$produk3->harga = 20000;



$produk4 = new Produk();
$produk4->judul = "PUBG";
$produk4->penulis = "Official PUBG";
$produk4->penerbit = "Tencent Games";
$produk4->harga = 100000;


echo "Komik : " . $produk3->getlabel();
echo "<br>";
echo "Game : " . $produk4->getlabel();


 ?>