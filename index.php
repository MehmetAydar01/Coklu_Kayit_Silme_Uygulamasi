<?php
    require_once "baglan.php";
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sonuc.php" method="post">
        <table width="500" align="center" cellpadding="0" cellspacing="0">
            <?php
                $sorgu = $veriTabaniBaglantisi->prepare("SELECT * FROM kisiler");
                $sorgu->execute();

                $kayitSayisi = $sorgu->rowCount();
                $kayitlar = $sorgu->fetchAll(PDO::FETCH_ASSOC);

                foreach($kayitlar as $kayitSatirlari){
            ?>
                <tr>
                    <td width="25" height="30" align="left"><input type="checkbox" name="secim[]" value="<?php echo $kayitSatirlari['id']; ?>"></td>
                    <td height="30" align="left"><?php echo $kayitSatirlari["adi"] . " " . $kayitSatirlari["soyadi"]; ?></td>
                </tr>
            <?php        
                }
            ?>
            <tr>
                <td height="50" colspan="2" align="left"><input type="submit" value="Seçili Olanları Sil"></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
    $veritabaniBaglantisi = null;
?>