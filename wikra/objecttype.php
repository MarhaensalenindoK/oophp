<?php
class produk{
public $namabarang,
		$merk,
		$harga;
public function cetak(){
	return "$this->merk , (Rp. $this->harga)";
}
// INI CONSTRUCTOR
public function __construct($namabarang = "Nama Barang",$merk= "merk",$harga=0){
  $this->namabarang = $namabarang;
  $this->merk = $merk;
  $this->harga = $harga;
  }
}
// Ini Object Tipe
class CetakInfoProduk{
	public function cetakInfo(produk $produk ){
		$str="{$produk->namabarang} , {$produk->cetak()}";
		return $str;
	}
}
$produk1 = new produk("Mouse","Asuz Mouse",300000);
$produk2 = new produk("Flashdisk","Lenoto",50000);
$produk3 = new produk("Macbook","Apple",25000000);
$produk4 = new produk("Headset","ZEUS",500000);
$infoProduk = new CetakInfoProduk();
echo "NAMA BARANG 1: " . $produk1->cetak();
 echo "<br>";
echo "NAMA BARANG 2: " . $produk2->cetak();
echo "<br>";
echo "NAMA BARANG 3: " . $produk3->cetak();
echo "<br>";
echo "NAMA BARANG 4: " . $produk4->cetak();
echo "<br>";
echo "Info Lengkap Produk 4: " . $infoProduk->cetakInfo($produk4);




 ?>
