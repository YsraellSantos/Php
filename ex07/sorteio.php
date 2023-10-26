<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Resultado do sorteio</h1>


    <?php 
    
    


    $maxx = $_GET["max"];
    printf("<br>");
    $minn = $_GET["min"];
    printf("<br>");
    $numAleatorio = mt_rand($minn, $maxx); 

    echo "O menor numero foi $minn";
    printf("<br>");
    echo " E o maios numero foi $maxx";

    printf("<br>");

    print " O numero sorteado foi $numAleatorio";

    ?>
    <br>
    <button onclick="javascript:document.location.reload()">Gerar outro </button>
    <!-- Essa função recarrega a pagina  -->

</body>
</html>