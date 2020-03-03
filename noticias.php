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
$css = "/css/noticias.css";

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

<h1>Faça seu Pedido</h1>
<div class="img01">
<img class="responsiva" src="img/01.jpg">
</div>
<fieldset>
        <legend>Dados do Cliente:</legend>
    Nome:<input type="text" name="nome"/>
        <br><br>
    Telefone:<input type="number" name="telefone"/><br><br>
    Endereço:<input type="Address" name="endereço"/><br><br>
    <span id="erro">Preencha os dados do cliente corretamente!</span>
            </fieldset><br>
<h3>Monte sua Pizza</h3>


<fieldset>
    
          <legend>Dados do Pedido:</legend>
          <h3>Monte sua Pizza</h3>
          <div class="lista">
<span id="erro">Escolha pelo menos um sabor!</span>
<input list="Pizzas" name="Pizza"/>
        <datalist id="Pizzas">
          <option value="---Escolha seu Sabor---">---Escolha seu Sabor---</option>
          <option value="Calabresa">Calabresa</option>
          <option value="Mussarela">Mussarela</option>
          <option value="Mexicana">Mexicana</option>
          <option value="Portuguesa"></option>
          <option value="Brigadeiro"></option>
          <option value="Romeu & Julieta"></option>
          <option value="Sushi"></option>
          <option value="Strogonofe de Frango"></option>
          <option value="Chocolate com MM´S"></option>
          <option value="Chocolate com Sorvte(creme)"></option>
          <option value="Batata Frita com calabresa"></option>
        </datalist>
    
    <input list="Pizzas" name="Pizza"/>
        <datalist id="Pizzas">
          <option value="---Escolha seu Sabor---">---Escolha seu Sabor---</option>
          <option value="Calabresa">Calabresa</option>
          <option value="Mussarela">Mussarela</option>
          <option value="Mexicana">Mexicana</option>
          <option value="Portuguesa"></option>
          <option value="Brigadeiro"></option>
          <option value="Romeu & Julieta"></option>
          <option value="Sushi"></option>
          <option value="Strogonofe de Frango"></option>
          <option value="Chocolate com MM´S"></option>
          <option value="Chocolate com Sorvte(creme)"></option>
          <option value="Batata Frita com calabresa"></option>
        </datalist>
    <br><br>
</div>

&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
      <h3>Tamanho:</h3>
      
    <input type=radio id="brotinho" name="tamanho" value="b"/>
    <label for="brotinho">Brotinho</label>
    <input type=radio id="media" name="tamanho" value="m"/>
    <label for="media">Média</label>
    <input type=radio id="grande" name="tamanho" value="g"/>
    <label for="grande">Grande</label>
    <input type=radio id="grande" name="tamanho" value="g"/>
    <label for="grande">Família</label>
    
    <h3>Igrediente Extra:</h3>
    <input list="Extras" name="Extra"/>
    <datalist id="Extras">
    <option value="Cebola"></option>
    <option value="Tomate"></option>
    <option value="Milho"></option>
    <option value="Cheddar"></option>
    <option value="Catupry"></option>
    <option value="Outros"></option>
    </datalist>



        <h3>Forma de Pagamento:</h3>
                <input list="Pagamentos" name="Pagamento"/>
                <datalist id="Pagamentos">
                <option value="Dinheiro">
                <option value="Débito">
                <option value="Crédito">
                </datalist><br>
                
                <input id="btn" type="button" value="Fechar Pedido" />
            </fieldset><br><br>

          </fieldset><br>
    









<?php

// Inclui o rodapé do template
require ('_footer.php');

?>
