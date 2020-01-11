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
    $waktuMain,
    $tipe;

  //method otomatis dijalankan setiap membuat objek baru
  public function __construct($judul="judul", $penulis="penulis",$penerbit="penerbit", $harga="harga=0", $jmlHalaman=100, $waktuMain=50, $tipe){  
  	$this->judul = $judul;
  	$this->penulis = $penulis;
  	$this->penerbit = $penerbit;
  	$this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
    $this->tipe = $tipe;
  }



  //Method
  public function getLabel(){
  		return "$this->judul, $this->penulis";
  }

  public function getInfoLengkap(){
      // Komik : Naruto | Namamato suke, Shonen Jump (Rp.30.000) ~ 100 Halaman.
     $str = "{$this->tipe} : {$this->penerbit} | {$this->getLabel()}, {$this->harga})";
    
     if( $this->tipe == "Komik"){
       $str .= " ~ {$this->jmlHalaman} Halaman.";

     }else if($this->tipe == "Game"){
      $str .= " ~ {$this->waktuMain} Jam. ";
     }

     return $str;
  }
}


class CetakInfoProduk{
    public function cetak(Produk $produk){
      $str = "({$produk->judul} | {$produk->getLabel()}, {$produk->harga})";
      return $str;
    }
}


$produk1 = new Produk("Naruto", "Namamato suke", "Septianus", 145000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted","Neil Druckman","Sony Computer",245000, 0, 50, "Game");


echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();


// Komik : Naruto | Namamato suke, Shonen Jump (Rp.30.000) ~ 100 Halaman.
// Game : Uncharted | Neli Druckman, Sony COmputer (Rp.245.000) ~ 30 Jam.
