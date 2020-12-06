<?php
class Produk{
public $namabarang,
		$merk;
	protected $diskon;
// protected	$harga;
private $harga;
public function getCetak(){
	return "$this->merk , (Rp. $this->harga)";
}
// INI CONSTRUCTOR
public function __construct($namabarang = "Nama Barang",$merk= "merk",$harga=0){
  $this->namabarang = $namabarang;
  $this->merk = $merk;
  $this->harga = $harga;
  }
	public function cetakInfo(){
		$str="{$this->namabarang} , {$this->getCetak()}";
		return $str;
}

public function getHarga(){
	return $this->harga - ($this->harga * $this->diskon / 100);
}
}
// =============INHERITANCE================
class Laptop extends Produk{
  public $ukrLayar;
  public function __construct($namabarang= "Nama Barang",$merk="Merk",$harga=0,$ukrLayar="Ukuran Layar"){
    parent::__construct($namabarang,$merk,$harga);
    $this->ukrLayar = $ukrLayar;

  }
	// ===set Diskon dari visibility protected===
	public function setDiskon($diskon){
		$this->diskon = $diskon;
	}

	public function cetakInfo(){
		$str="Laptop : ".parent::getCetak()." || Ukuran layar : {$this->ukrLayar}";
		return $str;
	}
}
class Flashdisk  extends Produk{
  public $ukrLayar;
  public function __construct($namabarang= "Nama Barang",$merk="Merk",$harga=0,$kapasitas="Kapasitas"){
    parent::__construct($namabarang,$merk,$harga);
    $this->kapasitas = $kapasitas;

  }
	public function cetakInfo(){
	$str="Flashdisk : ".parent::getCetak()." || Ukuran kapasitas : {$this->kapasitas}";
	return $str;
}
}

$produk1 = new Laptop("Macbook","Apple",25000000,"14 inch");
$produk2 = new Flashdisk("Flashdisk","Lenoto",50000,"8 GB");


echo $produk1->cetakInfo();
echo "<br>";
echo $produk2->cetakInfo();
echo "<br>";
echo "<hr>";
$produk1->setDiskon(50);
echo $produk1->getHarga();





 ?>
