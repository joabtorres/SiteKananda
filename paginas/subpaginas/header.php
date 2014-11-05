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
            <li><a href="<?= RAIZ ?>paginas/imovel/areas-portuarias.php">Áreas Portuárias</a></li>
            <li class="submenu-2"><a>Casas</a>
            <ul class="nav nav-pills">
              <li><a href="<?= RAIZ ?>paginas/imovel/casa/aluguel.php">Aluguel</a></li>
              <li><a href="<?= RAIZ ?>paginas/imovel/casa/venda.php">A Venda</a></li>
            </ul>
            </li>
            <li><a href="<?= RAIZ ?>paginas/imovel/loteamentos.php">Loteamentos</a></li>
            <li><a href="<?= RAIZ ?>paginas/imovel/terrenos-urbanos.php">Terrenos Urbanos</a></li>
            <li><a href="<?= RAIZ ?>paginas/imovel/terrenos-rurais.php">Terrenos Rurais</a></li>
          </ul>
        </li>
        <li><a href="<?= RAIZ ?>paginas/servicos.php">Serviços</a></li>
        <li><a href="<?= RAIZ ?>paginas/galeria/">Galeria</a></li>
        <li><a href="<?= RAIZ ?>paginas/mapa.php">Mapa</a></li>
        <li><a href="<?= RAIZ ?>paginas/sobre.php">Sobre</a></li>
      </ul>
    </div>
  </div>

