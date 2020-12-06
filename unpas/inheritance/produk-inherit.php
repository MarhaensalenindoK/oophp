<?php
// Jualan Produk Gaiss
// Komik
// Game

class Produk{
	public $judul,
	 $penulis,
	 $penerbit,
	 $harga,
	 $jmlHalaman,
	 $waktuMain;

	 // =====================Ini cara Constructornya ==================
	 public function __construct($judul = "judul" ,$penulis= "Penulis" ,$penerbit = "Penerbit" ,$harga = 0,$jmlHalaman = 0 ,$waktuMain = 0){
	 	$this->judul = $judul;
	 	$this->penulis = $penulis;
	 	$this->penerbit = $penerbit;
	 	$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;

	 }

	 public function getlabel(){

	 	return "$this->penulis,$this->penerbit";
	 }
	 public function getInfoProduk(){
		 $str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";
		return $str;
	 }
}
// ======= INHERITANCE ============
class Komik extends Produk{

	public function getInfoProduk(){
		$str = "Komik : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}
class Game extends Produk{
	public function getInfoProduk(){
		$str = "Game : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
		return $str;
	}
}
// ======== Object type ===========
// Harus dari function produk agar tidak macem macem
class cetakinfoproduk{
	public function cetak(Produk $produk){
		$str = "{$produk->judul} | {$produk->getlabel()}  (Rp. {$produk->harga}) ";
		return $str;
	}

}


$produk1 = new Komik("Naruto","Masashi","RCTI",20000, 100 , 0 );
$produk2 = new Game("PUBG","Official PUBG","Tencent Games",100000 ,0,50 );

// Komik : Masashi,RCTI
// Game : Official PUBG,Tencent Games
// Naruto | Masashi,RCTI (Rp. 20000)
echo $produk1->getInfoProduk($produk1);
echo "<br>";
echo $produk2->getInfoProduk($produk2);





 ?>
