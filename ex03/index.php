<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis</title>
</head>
<body>

    <?php 
    /* 
                       *Regras*
    1 = Variaveis sempre começa com o simbolo $*
    2 = O segundo pode ser *letras ou o simbulo _ *
    3 = Aceita caracteres [a-z], [A-Z], [0-9], e [_]
    4 = Aceita caracteres da tabela ASCII a partir de 128
    5 = Aceita caracteres acentuados á,õ,ç
    6 = A linguagem é *case sensitive* em relação aos nome 
    7 = Nomes especiais como $this não podem ser usados
    8 = As const não funciona no echo
    9 = Pra fazer a interpolação so funciona a variavel, No case das aspas dupla""
                    *Recomendação*
    10 =  $nomeComplCliente = *camel case*
    11 =  $telefone_contato_fornecedor =  *Snake Case*

    */


    
    echo "Trabalhando com variaveis";

    $nome = "Israel";
    $sobrenome = "Santos";
    const Salario = "2200$";

    print_r('<br>');

    echo "É um prezer em te conhecer ". $nome;
    print_r('<br>');
    echo "E trabalho na metalurgica cataguases, e recebo um salario de aproximadamente de " . Salario ;

     $name = "Israel custodio dos santos";
     $idade = 23;
     $salario = 2200;
     $rua = "vcidadão joão novais";
     const ano = 2023;

    echo "Seu nome $name e a sua idade é $idade \u{1F92B}, " . ano;



    ?>
</body>
</html>