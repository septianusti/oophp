<?php 
//Studi kasus
//menjual komik
//menjual game
//public sebagai visibility
// -> (Ditimpa dengan)
//method adalah function yang ada di dalam class
//$this supaya mengamil variabel dari class produk, jika tidak menggunakan $this maka akan membuat variabel sendiri di function getLabel
// . digunakan untuk penggabungan

class produk{
 public $judul="judul",
 		$penulis="penulis",
 		$penerbit="penerbit",
 		$harga=0;
  //Method
  public function getLabel(){
  		return "$this->judul, $this->penulis";
  }

}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// echo "<br>";
// echo "<br>";


// $produk2 = new Produk();
// $produk2->judul="GTA V";
// $produk2->tambahproperty="hehe";
// var_dump($produk2);

//Objek
$produk3 = new Produk();
$produk3->judul ="NamaMato";
$produk3->penulis ="matashi moto";
$produk3->penerbit ="shonen jump";
$produk3->harga = 65000;

// echo "Komik : $produk3->judul, $produk3->penulis";
// echo "<br>";

//Objek
$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

echo "Komik : " .  $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();

