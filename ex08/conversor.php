<?php 

//   Formatação simples 


// $dola = $_REQUEST["dolar"];
// // echo "O valor do dola atualmente é $dola  ";

// print_r("<br>");

//  $real = $_REQUEST["real"];
// //  echo"O valor que você tem é $real";

//  print_r("<br>");

//  $conversor = $real / $dola;

//  echo" Seu R\$". number_format($real, 2, ",", ".") . " vale em dolar US\$" . number_format($conversor, 2, ",", ".") ;


//  fomatação de mopedas com internacionalização!
 
 $padrão = numfmt_create("pt_BR", NumberFormatter:: CURRENCY);
//  Esse tipo de formatação diz que, são para as pessoas do brasil  biblioteca

// converesor 

$dolar = $_GET["dolar"];

$real= $_REQUEST["real"];

$converter = $real / $dolar;

$padrão = numfmt_create("us", NumberFormatter::CURRENCY);

echo " Seus" . numfmt_format_currency($padrão, $real, "BRL") . " Equivalente a " . numfmt_format_currency($padrão, $converter, "USD");


?>