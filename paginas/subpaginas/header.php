<?php 
  require_once('constantes.php'); 
  require_once(RAIZSIMPLES.'classes/Objeto.class.php');  

  $config = new Objeto('empresa');
  $config->selecionarTudo();
  $config = $config->retornar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title><?= $config['titulo_site']?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= RAIZ ?>css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="<?= RAIZ ?>css/bootstrap/bootstrap-theme.min.css">
  <link rel="stylesheet" href="<?= RAIZ ?>css/templete.css">
  <script type="text/javascript" src="<?= RAIZ ?>js/jquery-1.11.0.js"></script>
</head>
<body>
  <div class="container" id="interface">
  <div class="row">
    <div class="col-xs-12" id="cabecalho">
      <div class="logo-imagem">
        <img src="<?= RAIZ.$config['logotipo'] ?>" alt="">
      </div>
      <img src="<?= RAIZ ?>img/header.png">
      <ul class="nav nav-pills" id="menu-head">
        <li style="margin-left: 10px;"><a href="<?= RAIZ ?>">Home</a></li>
        <li><a>Imóvel</a>
          <ul class="nav nav-pills">
            <li><a href="<?= RAIZ ?>areas-portuarias">Áreas Portuárias</a></li>
            <li class="submenu-2"><a>Casas</a>
            <ul class="nav nav-pills">
              <li><a href="<?= RAIZ ?>aluguel">Aluguel</a></li>
              <li><a href="<?= RAIZ ?>venda">A Venda</a></li>
            </ul>
            </li>
            <li><a href="<?= RAIZ ?>loteamentos">Loteamentos</a></li>
            <li><a href="<?= RAIZ ?>terrenos-urbanos">Terrenos Urbanos</a></li>
            <li><a href="<?= RAIZ ?>terrenos-rurais">Terrenos Rurais</a></li>
          </ul>
        </li>
        <li><a href="<?= RAIZ ?>servicos">Serviços</a></li>
        <li><a href="<?= RAIZ ?>galeria">Galeria</a></li>
        <li><a href="<?= RAIZ ?>mapa">Mapa</a></li>
        <li><a href="<?= RAIZ ?>sobre">Sobre</a></li>
      </ul>
    </div>
  </div>

