<?php

// Configuração inicial da página
require ('_config.php');

// Define o título "desta" página
$titulo = "";

// Opção ativa no menu principal
// Valores possíveis: "", "artigos", "noticias", "contatos", "sobre", "procurar"
// Valores diferentes destes = ""
$menu = "";

// Aponta para o CSS "desta" página. Ex.: /css/contatos.css
// Deixe vazio para não usar CSS adicional nesta página
$css = "";

// Aponta para o JavaScript "desta" página. Ex.: /js/contatos.js
// Deixe vazio para não usar JavaScript adicional nesta página
$js = "";

/*********************************************/
/*  SEUS CÓDIGOS PHP DESTA PÁGINA FICAM AQUI */
/*********************************************/



/************************************************/
/*  SEUS CÓDIGOS PHP DESTA PÁGINA TERMINAM AQUI */
/************************************************/

// Inclui o cabeçalho do template
require ('_header.php');

?>

<h1>Seja bem-vindo a nosso site - Pizzaria Bip Bip</h1>
<div class="logo01">
<img class="responsiva" src="img/pizza02.jpg">
</div>
<h3>Nascemos com um único propósito: Proporcionar todos os dias aos amantes da pizza a experiência e sabores únicos. 
<p> Utilizando ingredientes frescos de alta qualidade - nossa pizza é rica em sabor, história e tradição.</p> </h3>
&nbsp;
&nbsp;
&nbsp;
&nbsp;

<h1>Historia da Pizza</h1>
<p>    A história da pizza começou há 6 mil anos com os egípcios. Acredita-se que eles foram os primeiros a misturar farinha com água.&nbsp;Outros afirmam que os pioneiros são os gregos, que faziam a massas à base de farinha de trigo, arroz ou grão-de-bico e as assavam em tijolos quentes. A novidade foi parar na península da Etrúria, na Itália. Era um alimento de pobres do Sul da Itália. Mas foram os napolitanos que passaram a acrescentar molho de tomate e orégano à massa, que era dobrada ao meio e devorada como se fosse um sanduíche. Quem tinha um pouco mais de dinheiro colocava queijo, pedaços de linguiça ou ovos por cima.</p>

<p> A partir do século XVI, a novidade era apreciada na corte de Nápoles e logo se espalhou pelo mundo.</p> 

<p> Pizzas podem ter uma centena de coberturas. A primeira redonda criada por Rafaelle Esposito, em 1889, para ser servida à rainha Margherita, da Itália, foi enfeitada com as cores da bandeira italiana: queijo (branco), manjericão (verde) e tomate (vermelho). No início do século XVIII, Rosa e Raffael Espósito, comerciantes de Nápoles, Itália, produziam e vendiam um alimento, aperfeiçoado da popular massa de pão, recheada de torresmos, azeitona e queijo “cavalo”, que abastecia as mesas das famílias pobres de Nápoles, desde o início daquele milênio, denominada Pizza.</p> 

<p> A Fama dos Espósito correu a Itália e fez com que o Rei Umberto I realizasse uma verdadeira operação de guerra para trazer à cozinha do palácio o casal Espósito para que preparassem para a Rainha Margherita de Sabóia, uma pizza, que acabara de inventar, com sabor do manjericão, sobre a massa coberta por mussarela e rodelas de tomate.</p> 

<p> O encantamento da Rainha pela pizza acabou determinando o nome de “Margherita” para aquele tipo de recheio. Port’Alba foi a primeira pizzaria de que se tem registro. Surgiu em Nápoles em 1830. A partir daí se disseminou pelas regiões vizinhas e ganhou o mundo com os navios dos imigrantes italianos.

No Brasil, até os anos 50, as pizzarias eram uma exclusividade das colônias italianas e seus redutos.</p> 

A partir daí elas se disseminaram por todo o país até se transformarem, nos dias atuais, num dos mais saborosos pratos de nossa culinária. </h4>








<?php

// Inclui o rodapé do template
require ('_footer.php');

?>
