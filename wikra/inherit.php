<?php
class Produk{
public $namabarang,
		$merk,
		$harga,
		$ukrLayar,
		$kapasitas;
public function cetak(){
	return "$this->merk , (Rp. $this->harga)";
}
// INI CONSTRUCTOR
public function __construct($namabarang = "Nama Barang",$merk= "merk",$harga=0,$ukrLayar="Ukuran layar",$kapasitas = "Kapasitas"){
  $this->namabarang = $namabarang;
  $this->merk = $merk;
  $this->harga = $harga;
	$this->ukrLayar = $ukrLayar;
	$this->kapasitas = $kapasitas;
  }
	public function cetakInfo(){
		$str="{$this->namabarang} , {$this->cetak()}";
		return $str;
}
}
// =============INHERITANCE================
class Laptop extends Produk{
	public function cetakInfo(){
		$str="Laptop : {$this->namabarang} , {$this->cetak()} || Ukuran layar : {$this->ukrLayar}";
		return $str;
	}
}
class Flashdisk  extends Produk{
	public function cetakInfo(){
	$str="Flashdisk : {$this->namabarang} , {$this->cetak()} || Ukuran kapasitas : {$this->kapasitas}";
	return $str;
}
}

$produk1 = new Laptop("Macbook","Apple",25000000,"14 inch", "-");
$produk2 = new Flashdisk("Flashdisk","Lenoto",50000,"-","8 GB");


echo $produk1->cetakInfo();
echo "<br>";
echo $produk2->cetakInfo();
echo "<br>";





 ?>
