<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ülesanne 403</title>
</head>
<body>
<a href="../phptest.php">tagasi.....Ülesannete leht</a>
<h1>Ülesanne 403</h1>
<?php
$varv=array("CornflowerBlue","DarkKhaki","Crimson","MidnightBlue","Plum","RoyalBlue","SeaGreen","Sienna","Tomato","YellowGreen","Orchid",
    "Moccasin","Maroon","LightSalmon","Indigo");
//tsükliga kuvame värvid massiivist
for($i=0;$i <15; $i++){
    echo "<span style='color: $varv[$i]'>$varv[$i]</span><br>";
}
?>
</body>
</html>
