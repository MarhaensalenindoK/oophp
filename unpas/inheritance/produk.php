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
	 $waktuMain,
	 $tipe;

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
// ======== Object type ===========
// Harus dari function produk agar tidak macem macem
class cetakinfoProduk{
	public function cetak(Produk $produk){
		$str = "{$produk->judul} | {$produk->getlabel()}  (Rp. {$produk->harga}) ";
		return $str;
	}

}

class Komik extends Produk {
	function getInfoProduk(){
		$str = "KOMIK : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) Jumlah Halaman : {$this->jmlHalaman}";
		return $str;
	}
}
class Game extends Produk {
	function getInfoProduk(){
		$str = "GAME : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) Jumlah Waktu Main ~ {$this->waktuMain}";
		return $str;
	}
}







$produk1 = new Komik("Naruto","Masashi","RCTI",20000, 100 , 0 ,"Komik");
$produk2 = new Game("PUBG","Official PUBG","Tencent Games",100000 ,0,50 ,"Game");

// Komik : Masashi,RCTI
// Game : Official PUBG,Tencent Games
// Naruto | Masashi,RCTI (Rp. 20000)
echo $produk1->getInfoProduk($produk1);
echo "<br>";
echo $produk2->getInfoProduk($produk2);





 ?>
