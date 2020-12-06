<?php
// Jualan Produk Gaiss
// Komik
// Game

class Produk{
	public $judul,
	 $penulis,
	 $penerbit,
	 $harga;

	 // =====================Ini cara Constructornya ==================
	 public function __construct($judul = "judul" ,$penulis= "Penulis" ,$penerbit = "Penerbit" ,$harga = 0){
	 	$this->judul = $judul;
	 	$this->penulis = $penulis;
	 	$this->penerbit = $penerbit;
	 	$this->harga = $harga;


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
// =======KOMIK======
class Komik extends Produk{
	// ======OVERRIDING====
	public $jmlHalaman;
	public function __construct($judul = "judul" ,$penulis= "Penulis" ,$penerbit = "Penerbit" ,$harga = 0,$jmlHalaman = 0){
		parent::__construct($judul,$penulis,$penerbit ,$harga);
		$this->jmlHalaman = $jmlHalaman;
	}
	public function getInfoProduk(){
		$str = "Komik : ". parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}



// ========GAME===========
class Game extends Produk{
	// ==========OVERRIDING=======
	public $waktuMain;
	public function __construct($judul = "judul" ,$penulis= "Penulis" ,$penerbit = "Penerbit" ,$harga = 0,$waktuMain = 0){
		parent::__construct($judul,$penulis,$penerbit ,$harga);

		$this->waktuMain = $waktuMain;
	}
	public function getInfoProduk(){
		$str = "Game : ". parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
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


$produk1 = new Komik("Naruto","Masashi","RCTI",20000, 100 );
$produk2 = new Game("PUBG","Official PUBG","Tencent Games",100000 ,50 );

// Komik : Masashi,RCTI
// Game : Official PUBG,Tencent Games
// Naruto | Masashi,RCTI (Rp. 20000)
echo $produk1->getInfoProduk($produk1);
echo "<br>";
echo $produk2->getInfoProduk($produk2);





 ?>
