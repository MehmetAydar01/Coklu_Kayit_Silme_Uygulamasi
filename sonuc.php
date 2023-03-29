<?php
    require_once "baglan.php";
    require_once "filtre.php";

    $gelenSecimDegerleri = $_POST['secim'];

    if (!empty($gelenSecimDegerleri)) {
        $idleriBirlestir = implode(", ", $gelenSecimDegerleri);
        $idler = Filtrele($idleriBirlestir);
    
        $sil = $veriTabaniBaglantisi->prepare("DELETE FROM kisiler WHERE id IN ($idler)");
        $sil->execute();

        if ($sil) {
            header("Location:index.php");
            exit;
        }
    }
    header("Location:index.php");
    exit;
    

    

    /*
        2. Yol
        require_once "baglan.php";
        require_once "filtre.php";

        $gelenSecimDegerleri = $_POST['secim'];

        foreach ($gelenSecimDegerleri as $value) {
            $value = Filtrele($value);
            $sil = $veriTabaniBaglantisi->prepare("DELETE FROM kisiler WHERE id = ? LIMIT 1");
            $sil->execute([$value]);
        }

        header("Location:index.php");
        exit;
    */

    
?>