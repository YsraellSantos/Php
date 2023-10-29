<?php 


$numero = $_POST["num"] ?? 0;


echo"Analisando o numero <strong> ". number_format($numero, 3, "," , "." ) ." </strong> informado pelo usuário";

$int = (int) $numero;
echo" <ul> <li> Aparte inteira do número é <strong>".number_format($int, 0, ",", ".")."</strong></li>";


$fra = $numero - $int;
echo "<li>A parate fracionaria do numero é <strong>".number_format($fra, 3 , ",", ".")."</strong></li> </ul>"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <button onclick="javascript:history.go(-1)">Volta</button> <!-- butao de volrta -->
</body>
</html>