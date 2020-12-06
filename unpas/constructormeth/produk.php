<?php
// Jualan Komik dan game

class Produk {
	public $judul,
					$penulis,
					$penerbit,
					$harga;
// Method

public function __construct($judul = "Judul",$penulis = "Penulis",$penerbit = "Penerbit",$harga = 0){
	$this->judul = $judul;
	$this->penulis = $penulis;
	$this->penerbit = $penerbit;
	$this->harga= $harga;


}


	public function getLabel(){
		return "$this->penulis,$this->penerbit";
	}



}



$produk1 = new produk("AOT","Hajime Isayama","Animeni",30000);
$produk2 = new Produk("PUBG","Tencent Games","PUBG Official",100000);
$produk3 = new Produk("Naruto");


echo "Komik : ". $produk1->getLabel();
echo "<br>";
echo "Game : ". $produk2->getLabel();
echo "<br>";
var_dump($produk3);


 ?>
