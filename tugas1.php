<?php
//penulisan class, digunakan untuk membuat kerangka kerja
class product {
    //penulisan property
    private $name = "Mobil Innova Venturer <br/>";
    public $price;
    public $discount;

    //penulisan metode,Sebuah aksi yang berada di dalam class
    function getPrice() {
    }

    function setPrice() {
        return "Rp 450.000.000 <br/>";
    }

    function getName() {

    }

    function setName() {
        return "Nama Produk : " .$this->name;
    }

    function getDiscount() {

    }

    function setDiscount() {
        return "Beli Mobil Gratis Servis 5x <br/><br>";
    }
}

// instansial class product
$product = new product();

// memanggil method setName dari class product
echo $product->setName();

//memanggil method setPrice dari class product
echo $product->setPrice();

//memanggil method setDiscount dari class product
echo $product->setDiscount();

?>

