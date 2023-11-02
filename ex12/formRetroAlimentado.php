<!DOCTYPE html>
<html lang="tp-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fomulario retro alimentado</title>
    <!-- <link rel="stylesheet" href="style.css"> -->

</head>

<body>

    <?php 
    
    // captirando os dados do formulario retro alimentado

    $valor1 = $_GET['v1'] ?? 0; //Parametros se eu nao digitar nenhum valor ele auto se incrementa
    $valor2 = $_GET['v2'] ?? 0;
    
    ?>

    <h1>Somando valores</h1>

    <main>

        <!-- Modo simplificado  <//?=$_SERVER['PHP_SELF']//  sem as barras -->
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="v1">Valor 1</label>
            <input type="number" name="v1" placeholder="Digite aqui" value="<?=$valor1?>">
            <!---->

            <label for="v2">Valor 2</label>
            <input type="number" name="v2" placeholder="Digite aqui" value="<?=$valor2?>">

            <input type="submit" value="Somar">

        </form>
    </main>

    <section>

        <h2>Mostrando resultados</h2>

        <?php 

        $soma = $valor1 + $valor2;

        echo "A soma estre os numero $valor1 e $valor2 é  $soma";
    
    ?>


    </section>
</body>

</html>