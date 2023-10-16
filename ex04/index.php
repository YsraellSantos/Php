<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tipos escalares</title>

</head>
<body>
    <?php 


        const estado = 'rj';
        echo "Moro no estado do " . estado;
        print_r("<br>");

        echo "A data de hojé é " . date("D / d / M / Y"); 

        print_r("<br>");

        $NOME = 'Israel';
        $sobrenome = "santos\u{1F596}";       // $sobrenome = 'santos\u{1F596}';  
        echo "$NOME $sobrenome";                    // Usando aspas simples

        print_r("<br>");

    /* A diferença entra as aspas simples '' e as aspas duplas ""
  ''  Aspas simples Ler todo o conteudo da variavel sem fazer a conversão
  "" As aspas duplas ela faz a comvenção do do conteudo da varial que esta dentro */

        $nome = "Israel"; /*String */
        $idade = 34;      /*int ou integer*/
        $peso = 85.9;     /* float, double ou real*/
        $true;        /*bool ou Boolean*/

        /* Hex = 0x
           Bin = 0b
           Oct = 0
        */
        $num = 20; 
        echo "O valor da variavel em Hex $num";
        print_r("<br>");
        $n = (int) 3e2;  // coeção
        var_dump($n);   // Mostra os tipos primitovos na tela

        $nom = "Anne";
        $sobre = "Santana";

        echo "Snom \" Israel\" $sobre";   // Sequemcia de escape

       

    ?>
</body>
</html>
3