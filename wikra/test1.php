<?php
class produk{
  public $namaBarang="Laptop", 
          $merk="Lenovo", 
            $harga=7000000;
            // membuat method
            public function cetakProduk(){
                return "Produknya adalah ...";
            }
            public function cetakProduk2(){
                return "$this->namaBarang, $this->merk, $this->harga";
            }
}
$produk1 = new produk();
$produk2 = new produk();
$produk2->namaBarang="Mouse";
$produk2->merk="Logitec";
$produk2->harga=100000;

var_dump($produk1);
echo "<br>";
var_dump($produk2);
echo "<br>";
echo $produk1->cetakProduk();
echo "<br>";
echo $produk2->cetakProduk2();
?>