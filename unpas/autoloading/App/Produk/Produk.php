<?php
abstract class Produk{
	protected $judul,
	 $penulis,
	 $penerbit,
	 $harga;
	 // ===== VISIBILITY =====
	 protected $diskon = 0;


	 // =====================Ini cara Constructornya ==================
	 public function __construct($judul = "judul" ,$penulis= "Penulis" ,$penerbit = "Penerbit" ,$harga = 0){
	 	$this->judul = $judul;
	 	$this->penulis = $penulis;
	 	$this->penerbit = $penerbit;
	 	$this->harga = $harga;
	 }


	 // Setter Getter
	 public function setJudul($judul){
		 // Melakukan validasi wajib string
		 if(!is_string($judul)){
			 throw new \Exception("Judul harus string");
		 }
		 $this->judul = $judul;
	 }
	 public function getJudul(){
		 return $this->judul;
	 }
	 public function setPenulis($penulis){
		 if(!is_string($penulis)){
			 throw new \Exception("Judul harus string");
		 }
		 $this->penulis = $penulis;
	 }
	 public function getPenulis(){
		 return $this->penulis;
	 }
	 public function setPenerbit($penerbit){
		 if(!is_string($penerbit)){
			 throw new \Exception("Judul harus string");
		 }
		 $this->penerbit = $penerbit;
	 }
	 public function getPenerbit(){
		 return $this->penerbit;
	 }

	 public function getHarga(){
		 return $this->harga - ($this->harga * $this->diskon / 100);
	 }

	 public function getlabel(){

	 	return "$this->penulis,$this->penerbit";
	 }
	 abstract public function getInfo();


}
