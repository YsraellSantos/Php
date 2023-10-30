<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<main>
    <pre>
        <?php

        setcookie("Dia-da-semana", "Segunda", time() + 3600);// 1hora tem 3600 segundos

        session_start();
        $_SESSION["TESTE"] = 'funcionou 10';



        echo "<H1>Superglobal GET</H1>";
        var_dump($_GET);

        echo"<h1>Superglobal POst</h1>";  
        var_dump($_POST);

        echo"<h1>SuperGlobal Request</h1>";
        var_dump($_REQUEST);

        echo"<h1>Superglobal COOKIE</h1>";
        var_dump($_COOKIE);

        echo"<h1>Supergal SESSION</h1>";
        var_dump($_SESSION);


        echo"<h1>Supergal Server</h1>";
        var_dump($_SERVER);

        echo"<h1>Supergal Globals</h1>";
        var_dump($GLOBALS);
        ?>
    </pre>
</main> 
    
</body>
</html>