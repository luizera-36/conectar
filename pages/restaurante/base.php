<?php 
include "../../functions/verifica-logado.php";
//session_start() já está dentro desse include...
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <title>Restaurante - Conéctar</title>
  <!-- CSS das páginas -->
  <link rel="stylesheet" href="../../styles/paginas-dentro.css">
  <!-- Icone da página -->
  <link rel="shortcut icon" href="https://seeklogo.com/images/S/spring-logo-9A2BC78AAF-seeklogo.com.png"
    type="image/x-icon">
  <!--IMPORT ICONS FROM Font AWESOME-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
</head>

<body class="grey lighten-3">

  <header>
    <!--NAV INICIO-->
    <div class="navbar-fixed" id="home">
      <nav class="teal darken-3">
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo"><img src="../../img/logo.png" id="logo" alt="logo"></a>
          <a data-target="slide-out" style="display: block; index-z: 900;"
            class="sidenav-trigger waves-effect waves-light"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li>
              <a>Olá, <?php echo $_SESSION["nm_restaurante"];?></a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!--NAV FIM-->

    <!-- BARRA LATERAL -->
    <ul id="slide-out" class="sidenav">
      <li>
        <div class="user-view">
          <div class="background">
            <img src="../../img/fundo.jpg" style="width:100%;" height=300>
          </div>
          <div class="center-align">
            <a href="#user">
              <?php
                $codigo = $_SESSION["cd_restaurante"];
                $nomearquivo = $_SESSION["img_restaurante"];
                $dir = '../../img_restaurantes/'.$codigo.'/'.$nomearquivo;
                if(is_dir($dir))
                echo"<img class='circle' src='../../img/usuario.png'>";
                else
                echo "<img class='circle' alt='foto' src='../../img_restaurantes/$codigo/$nomearquivo'>";
              ?>
            </a>
            <a class="btn" href="editar-info.php">Alterar Foto</a>
          </div>
          <a href="#name"><span class="white-text name"><?php echo $_SESSION['nm_restaurante'];?></span></a>
          <a href="#email"><span class="white-text email"><?php echo $_SESSION['email_restaurante']; ?></span></a>
        </div>
      </li>
      <li>
        <a href="../restaurante.php"><i style="color:#005748;" class="cor fab fa-2x fas fa-cookie-bite"></i>Realizar Pedido</a>
        <a href="avaliar-fornecedor.php"><i style="color:#005748;"
            class="cor fab fa-2x fas fa-star"></i>Avaliar Fornecedor</a>
        <a href="reportar-bug.php"><i style="color:#005748;" class="cor fab fa-2x fas fa-cog"></i>Reportar
          Bug</a>
      </li>
      <li>
        <div class="divider"></div>
      </li>
      <li><a class="waves-effect" href="../../functions/logout.php"><i style="color:#005748;"
            class="fab fa-2x fas fa-sign-out-alt"></i>Sair</a>
      </li>
    </ul>
  </header>