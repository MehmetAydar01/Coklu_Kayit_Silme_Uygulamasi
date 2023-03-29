<?php
    // Veritabani Baglantisi
    try {
        $veriTabaniBaglantisi = new PDO("mysql:host=localhost;dbname=coklukayituygulamasi;charset=UTF8", "root", "");
    } catch (PDOException $hata) {
        echo "Baglanti Hatasi<br>" . $hata->getMessage();
        die();
    }
?>