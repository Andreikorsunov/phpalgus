<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>PHP Algus</title>
</head>
<body>
<?php
echo "<h1>Tere hommikust!</h1>";
$tekst="Täna on esimene PHP tund";
echo $tekst;
echo "<br>";
echo "<h2>Matemaatka tehed. Mõistatus</h2>";
echo "<h3>Arva ära kaks arvu!</h3>";
$arv1=30;
$arv2=10;
//Kahe arvude liitmine +
echo "Kui lidamine kokku, vastus on ".($arv1+$arv2);
echo "<br>";
//jagamine
echo "Kui esimene arv jagame teise arvuga, siis vastus on ".($arv1/$arv2)
?>
<footer>
    <?php
    echo "Tänane kuupäev ".date("d.m.Y");
    echo "<br>";
    date_default_timezone_set("Estonia/Tallinn");
    echo "Keel on ".date("h:i:sa");
    ?>
</footer>
</body>
</html>
