<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>


    <main>

    <?php 

   
       $nome = $_GET["name"] ??  "sem nome";
       $sobrenomee = $_GET["sobrenome"] ?? "desconhecido";
       $t = $_GET["telefone"];

       echo " É um prazer em te conhecer $nome $sobrenomee  este é o meu site em php e o meu telefone é $t";
     ?>

    <p><a href="javascript:history.go(-1)">Volta para a pagina anterior</a></p>

    </main>
</body>
</html>