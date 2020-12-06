<?php
class Game extends Produk implements InfoProduk{
	// ==========OVERRIDING=======
	public $waktuMain;
	public function __construct($judul = "judul" ,$penulis= "Penulis" ,$penerbit = "Penerbit" ,$harga = 0,$waktuMain = 0){
		parent::__construct($judul,$penulis,$penerbit ,$harga);

		$this->waktuMain = $waktuMain;
	}
	public function setDiscon($diskon){
		$this->diskon = $diskon;
	}

	public function getInfoProduk(){
		$str = "Game : ". $this->getInfo() . " ~ {$this->waktuMain} Jam.";
		return $str;
	}
	public function getInfo(){
		$str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";
	 return $str;
	 }
}
