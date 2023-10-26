<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Resultado final</title>
 

</head>
<body>


    <h1>Primeiro desafio comcluido</h1>
    <h3>Desafio</h3>
   <h4>Digite um numero no e diga qual o antecessor e o suscesor </h4>

    <?php 
    
    $res = $_GET["numero"];
    echo "O numero atual é  $res";

    print_r("<br>");

    $num = $res + 1;
    print "O seuscesor  é $num ";

    print_r("<br>");

    $op = $res - 1;
    print "O antecessor é $op";
    ?>
    
</body>
</html>