<?php
// require 'App/Produk/InfoProduk.php';
// require 'App/Produk/Produk.php';
// require 'App/Produk/Komik.php';
// require 'App/Produk/Game.php';
// require 'App/Produk/CetakInfoProduk.php';
require 'App/init.php';

$produk1 = new Komik("Naruto","Masashi","RCTI",20000, 100 );
$produk2 = new Game("PUBG","Official PUBG","Tencent Games",100000 ,50 );

$cetakProduk = new cetakinfoproduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();



 ?>
