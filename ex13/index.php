<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio de php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php

    $dividendo = $_GET['d1'] ?? 0;
    $divisor = $_GET['d2'] ?? 1;


     ?>


    <main>
        <h1>Anatamia de uma divisão</h1>

        <form action="" method="get">

            <label for="d1">Dividendo</label>
            <input type="number" name="d1" id="d1" placeholder="Digite aqui" value="<?=$dividendo?>">

            <label for="d2">Divisor</label>
            <input type="number" id="d2" name="d2" placeholder="Digite aqui"  min="1" value="<?=$divisor?>">

            <input type="submit" value="Analisar">


        </form>

    </main>

    <section>
        <h2>Estrutura da divisão</h2>

       <?php
       // calculos
                                                             // Trem duas maneiras de fazer a divisão
       $quociente = (int) ($dividendo / $divisor); //  1 maneira (int) ($dividendo / $divisor)
       $resto = $dividendo % $divisor;             //  2 sugunda  intdiv($dividendo, $divisor)


            echo "<ul>";
            echo"<li> Dividendo: $dividendo </li>";
            echo"<li> Divisor: $divisor </li>";
            echo"<li> Quociente: $quociente  </li>";
            echo"<li> Resto: $resto </li>";
            echo"</ul>";
       ?>


   <table class="divisao">

   <tr>
        <td><?=$dividendo?></td>
        <td><?=$divisor?></td>
   </tr>

   <tr>
        <td><?=$quociente?></td>
        <td><?=$resto?></td>
   </tr>

   </table>

    </section>
</body>
</html>