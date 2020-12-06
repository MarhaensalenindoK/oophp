<?php
class Komik extends Produk implements InfoProduk{
	// ======OVERRIDING====
	public $jmlHalaman;
	public function __construct($judul = "judul" ,$penulis= "Penulis" ,$penerbit = "Penerbit" ,$harga = 0,$jmlHalaman = 0){
		parent::__construct($judul,$penulis,$penerbit ,$harga);
		$this->jmlHalaman = $jmlHalaman;
	}
	public function getInfoProduk(){
		$str = "Komik : ". $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
		return $str;
	}
	public function getInfo(){
		$str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";
	 return $str;
	 }
}
