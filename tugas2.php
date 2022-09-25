<?php

class hewan {
    //property produk
    var $monyet;

    //method monyet
    function berjalan() {
        return "Monyet bisa berjalan <br/>";
    }

    function makan() {
        return "Monyet juga bisa makan seperti manusia <br/>";
    }

    function bersuara() {
        return "Monyet bisa bersuara <br/>";
    }
}

//instansial class produk
$hewan = new hewan();

//memanggil methode berjalan dari class monyet
echo $hewan->berjalan();

//memanggil methode berjalan dari class monyet
echo $hewan->bersuara();

//memanggil methode berjalan dari class monyet
echo $hewan->makan();