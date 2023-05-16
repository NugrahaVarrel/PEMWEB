<?php
    require_once('CDmusic.php');
    require_once('CDrack.php');

    $produk1 = new CDmusic('Always', 5000, 0, 'Bon Jovi', 'Rock');
    $produk2 = new CDrack('$produk1->getName()', $produk1->getPrice(), $produk1->getDiscount(), 50 , 'Kaset');


    print "Produk : \n";
    print "Nama : ".$produk1->getName()."\n";
    print "Harga : ".$produk1->getPrice()."\n";
    print "Diskon : ".$produk1->getDiscount()."% \n\n";
    
    print "CD Music : \n";
    $produk1->setPrice($produk1->getPrice());
    print "Harga : ".$produk1->getPrice()."\n";
    $produk1->setDiscount($produk1->getDiscount());
    print "Diskon : ".$produk1->getDiscount()."% \n";
    print "Artis : ".$produk1->getArtist()."\n";
    print "Genre : ".$produk1->getGenre()."\n\n";
    
    print "CD Rack : \n";
    $produk2->setPrice($produk2->getPrice());
    print "Harga : ".$produk2->getPrice()."\n";
    print "Diskon : ".$produk2->getDiscount()."% \n";
    print "Kapasitas : ".$produk2->getCapacity()."\n";
    print "Model : ".$produk2->getModel()."\n";
?>