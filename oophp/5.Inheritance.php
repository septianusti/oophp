<?php
//Constructor
//sebuah method otomatis dijalankan setiap membuat objek baru
//Biasanya di gunakan untuk koneksi ke database


class produk{
 public $judul,
 		$penulis,
 		$penerbit,
 		$harga,
    $jmlHalaman,
    $waktuMain;

  //method otomatis dijalankan setiap membuat objek baru
  public function __construct($judul="judul", $penulis="penulis",$penerbit="penerbit", $harga="harga=0", $jmlHalaman=100, $waktuMain=50){  
  	$this->judul = $judul;
  	$this->penulis = $penulis;
  	$this->penerbit = $penerbit;
  	$this->harga = $harga;
    $this->jmlHalaman = $waktuMain;
  }



  //Method
  public function getLabel(){
  		return "$this->judul, $this->penulis";
  }

}


class CetakInfoProduk{
    public function cetak(Produk $produk){
      $str = "({$produk->judul} | {$produk->getLabel()}, {$produk->harga})";
      return $str;
    }
}


$produk1 = new Produk("Naruto", "Namamato suke", "Septianus", 145000, 100, 0);

$produk2 = new Produk("Uncharted","Neil Druckman","Sony Computer",245000, 0, 50);

// Komik : Naruto | Namamato suke, Shonen Jump (Rp.30.000) ~ 100 Halaman.
// Game : Uncharted | Neli Druckman, Sony COmputer (Rp.245.000) ~ 30 Jam.