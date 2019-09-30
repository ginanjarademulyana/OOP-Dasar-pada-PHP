<?php 

class Produk {
    public  $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain,
            $tipe;

            public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman, $waktuMain, $tipe){
                $this->judul = $judul;
                $this->penulis = $penulis;
                $this->penerbit = $penerbit;
                $this->harga = $harga,
                $this->jmlHalaman = $jmlHalaman,
                $this->waktuMain = $waktuMain,
                $this->tipe = $tipe;
            }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->getLabel()} (Rp. {$this->harga})";

        if( $this->tipe == "Komik"){
            $str .= " - {$this->jmlHalaman} Halaman.";
        }else if ($this->tipe == "Game"){
            $str .= " ~ {$this->waktuMain} Jam.";
        }
    }

}

class CetakInfoProduk {
    public function cetak( Produk $produk ){
        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto","Mashasi Koshimoto", "Shonen Jump", 30000, 100, null, "Komik");
$produk2 = new Produk("Uncharted","Neil Druckman", "Sony Computer", 25000, null, 50, "Game");

// Komik : Mashasi Koshimoto, Shonen Jump
// Game : Neil Druckman, Sony Computer
// Naruto | Mashasi Koshimoto, Shonen Jump, (Rp. 30000)

