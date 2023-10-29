<pre>

    <?php // cotação vinda da API do banco central 

    $inicio = date("m-d-Y", strtotime("-7days"));     // vai pegar a data -7 dias
    $fim = date ("m-d-Y");   // tem quer escreverf o codigo desse jeito /* mes, dia, ano*/

    // Tem que coloca as contra barra na frete das datas a primeria fora das aspas e a outra por dentro das aspas 
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    // Essa variavel dados vai pegar  os contgeudos da url do site do baco central
    $dados = json_decode(file_get_contents($url), true);

    // var_dump($dados);   // Essa linha so usa pra pegar as informações da pagina que estão loga abaixo
    $cotação = $dados["value"][0]["cotacaoCompra"];

    $dinheiro = $_GET["dolar"];

    $converção =  $dinheiro / $cotação; // divisão 



    $padrão = numfmt_create("pt-BR", NumberFormatter:: CURRENCY); // biblioteca

    echo"O seu dinheiro" . numfmt_format_currency($padrão, $dinheiro, "BRL") .  " Equivalente ao dolar " . numfmt_format_currency($padrão, $converção,"USD");




// var_dump
//array(2) {
//     ["@odata.context"]=>
//     string(127) "https://was-p.bcnet.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata$metadata#_CotacaoDolarPeriodo(cotacaoCompra,dataHoraCotacao)"
//     ["value"]=>    esse 1
//     array(1) {
//       [0]=>
//       array(2) {                                       $cotação = $dados["value"][0]["cotacaoCompra"];
//         ["cotacaoCompra"]=>     esse depois 2
//         float(5.2072)
//         ["dataHoraCotacao"]=>
//         string(23) "2023-02-28 13:11:19.197"
//       }
//     }
//   }
//   A cotação foi 5.2072
?>
</pre>