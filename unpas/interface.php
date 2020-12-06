<?php
// Jualan Produk Gaiss
// Komik
// Game

interface InfoProduk{
	public function getInfoProduk();
}

// ===============Ini menggunakan Abstract=============
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
// ======= INHERITANCE ============
// =======KOMIK======
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



// ========GAME===========
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




// ======== Object type ===========
// Harus dari function produk agar tidak macem macem
class cetakinfoproduk{
  public $daftarProduk = [];
  public function tambahProduk(Produk $produk){
    $this->daftarProduk[]=$produk;
  }
	public function cetak(){
		$str = "DAFTAR PRODUK : <br>";
    foreach ($this->daftarProduk as $p) {
      $str .= "- {$p->getInfoProduk()} <br>";
    }
		return $str;
	}

}



// ======object========

$produk1 = new Komik("Naruto","Masashi","RCTI",20000, 100 );
$produk2 = new Game("PUBG","Official PUBG","Tencent Games",100000 ,50 );

$cetakProduk = new cetakinfoproduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();







 ?>
