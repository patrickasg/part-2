<?php

// Tratamento do título da página
if ($titulo == "") {
    $titulo = "Pizarria Bip Bip";
} else {
    $titulo = "{$titulo} - Sem Nome";
}

// Tratamento do CSS da página
if ($css != "") {
    $css = "<link rel=\"stylesheet\" href=\"{$css}\">\n";
} else {
    $css = null;
}

// Tratamento do JavaScript da página --> _footer.php
if ($js != "") {
    $js = "<script src=\"{$js}\"></script>\n";
} else {
    $js = null;
}

?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titulo ?></title>
    <link rel="shortcut icon" href="/img/bip.jpg">
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/all.min.css">
    <?php echo $css ?>
</head>
<body>
<a id="topo"></a>

<div class="wrap">

    <header class="header">
        <a href="/" title="Pizzaria BIP BIP"><img src="img/bip.jpg" alt="Creed News"></a>
        <h1>Pizzaria BIP BIP<small>A melhor Pizza do Mundo.</small></h1>
    </header>

    <nav class="nav">
        <a href="/"><i class="fas fa-fw fa-home"></i></a>
        <div id="menulinks">
            <a <?php echo ( $menu == 'artigos' ) ? 'class="active"' : null ?> href="/inicial.php"><i class="fas fa-pizza-slice"></i></i> Cardápio</a>
            <a <?php echo ( $menu == 'noticias' ) ? 'class="active"' : null ?> href="/noticias.php"><i class="fas fa-fw fa-newspaper"></i> Faça Seu Pedido</a>
            <a <?php echo ( $menu == 'contatos' ) ? 'class="active"' : null ?> href="/contatos.php"><i class="fas fa-fw fa-mail-bulk"></i> Contatos</a>
            <a <?php echo ( $menu == 'sobre' ) ? 'class="active"' : null ?> href="/sobre.php"><i class="fas fa-fw fa-info-circle"></i> Local</a>
            <a <?php echo ( $menu == 'procurar' ) ? 'class="active"' : null ?> href="/procurar.php" id="procurar" title="Procurar no site"><i class="fas fa-fw fa-search"></i><span> Procurar</span></a>
            <a <?php echo ( $menu == 'login' ) ? 'class="active"' : null ?> href="/login.php" id="login" title="logar no site"><i class="fas fa-sign-in-alt"></i><span> Login</span></a>
        </div>
        <a href="#menu" id="menu"><i class="fas fa-fw fa-bars"></i></a>
    </nav>

    <main class="main">
<!-- CONTEÚDO DA PÁGINA -->
        
        
