<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exenplos de php</h1>

    <?php 
    
    date_default_timezone_set("America/Sao_Paulo");
    // A nossa tame zone se chama GMT-3
    // wiht esse comamdo deixa a time certo the a data 
    //CEST Vai ser a time e a date dos servidos local


    
    echo "Hojé é dia " . date("/D/d/M/Y");
    // data("/D/d/M/Y") = (D Maiusculo é o dia em 'Ingles ') )
    // data("/D/d/M/Y") =  (d munisculo é data)
    // data("/D/d/M/Y") =  (Maiusculo é o mes)
    //data("/D/d/M/Y")  = (Y Maiusculo é o ano)

    print_r('<br>'); // quebra de linha 

    
    echo "E a hora é " . date("G:i:s 
    
    T");
    // date("G:i:s"); = (G Maiusculo é a hora)
    // date("G:i:s"); = (i minusculo é os minutos)
    // date("G:i:s"); = (s minusculo é os segundos)
    // date("G:i:s"); = (T Maiusculo é time zone. Formato que foi configurado no servidos)

    ?>
</body>
</html>