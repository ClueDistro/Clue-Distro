
<?php
include "function.php";
$random_karakter = random_karakter();
//Membuat Cookie random_karakter yang dienkripsi dengan masa cookie 1 jam
setcookie(base64_encode('random_karakter'), base64_encode($random_karakter), time()+3600);
//Contoh link download yang dienkripsi
echo "Contoh: <a href='download.php?".base64_encode("file=Clue Disto Reffal.zip&random=".$random_karakter)."'>Clue Disto Reffal.zip</a>";
echo "<br/>";
echo "Contoh: <a href='download.php?".base64_encode("file=Clue Disto Reffal.zip&random=".$random_karakter)."'>Clue Disto Reffal.zip</a>";
exit;
?>
