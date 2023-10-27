<?php 


$dola = $_REQUEST["dolar"];
echo "O valor do dola atualmente é $dola  ";

print_r("<br>");

$real = $_REQUEST["real"];
echo"O valor que você tem é $real";

print_r("<br>");

$conversor = $real / $dola;

echo"$conversor" . $dola "";
?>