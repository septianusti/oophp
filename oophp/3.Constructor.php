<?php
//Constructor
//sebuah method otomatis dijalankan setiap membuat objek baru
//Biasanya di gunakan untuk koneksi ke database


class produk{
 public $judul="judul",
 		$penulis="penulis",
 		$penerbit="penerbit",
 		$harga=0;

  //method otomatis dijalankan setiap membuat objek baru
  public function __construct($judul,$penulis,$penerbit,$harga){  
  	$this->judul = $judul;
  	$this->penulis = $penulis;
  	$this->penerbit = $penerbit;
  	$this->harga = $harga;
  }



  //Method
  public function getLabel(){
  		return "$this->judul, $this->penulis";
  }

}



$produk1 = new Produk("Naruto", "Namamato suke", "Septianus", 145000);

$produk2 = new Produk("Uncharted","Neil Druckman","Sony Computer",245000);

echo "Komik : " .  $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();

