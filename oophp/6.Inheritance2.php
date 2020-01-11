<?php
//Constructor
//sebuah method otomatis dijalankan setiap membuat objek baru
//Biasanya di gunakan untuk koneksi ke database


class Produk{
 public $judul,
 		$penulis,
 		$penerbit,
 		$harga,
    $jmlHalaman,
    $waktuMain;

  //method otomatis dijalankan setiap membuat objek baru
  public function __construct($judul="judul", $penulis="penulis",$penerbit="penerbit", $harga="harga=0", $jmlHalaman=0, $waktuMain=0 ){  
  	$this->judul = $judul;
  	$this->penulis = $penulis;
  	$this->penerbit = $penerbit;
  	$this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;

  }



  //Method
public function getLabel(){
  		return "$this->judul, $this->penulis";
  }

public function getInfoProduk(){
      // Komik : Naruto | Namamato suke, Shonen Jump (Rp.30.000) ~ 100 Halaman.
     $str = "{$this->penerbit} | {$this->getLabel()}, {$this->harga})";
    
     if( $this->tipe == "Komik"){
       $str .= " ~ {$this->jmlHalaman} Halaman.";

     }else if($this->tipe == "Game"){
      $str .= " ~ {$this->waktuMain} Jam. ";
     }

     return $str;
  }
}

//child class
class Komik extends Produk{
  public function getInfoProduk(){
      $str = "Komik : {$this->penerbit} | {$this->getLabel()}, {$this->harga}) - {$this->jmlHalaman} Halaman.";
      return $str;
  }
}

//child Game
class Game extends Produk{
  public function getInfoProduk(){
      $str = "Game : {$this->penerbit} | {$this->getLabel()}, {$this->harga}) - {$this->waktuMain} Jam.";
      return $str;
  }
}


class CetakInfoProduk{
    public function cetak(Produk $produk){
      $str = "({$produk->judul} | {$produk->getLabel()}, {$produk->harga})";
      return $str;
    }
}


$produk1 = new Komik("Naruto", "Namamato suke", "Septianus", 145000, 100, 0);
$produk2 = new Game("Uncharted","Neil Druckman","Sony Computer",245000, 0, 50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();


// Komik : Naruto | Namamato suke, Shonen Jump (Rp.30.000) ~ 100 Halaman.
// Game : Uncharted | Neli Druckman, Sony COmputer (Rp.245.000) ~ 30 Jam.