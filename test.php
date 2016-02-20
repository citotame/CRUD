<?php
  require_once 'config/config.class.php';
  require_once 'CRUD.class.php';

  $host = "localhost";
  $db = "server";
  $user = "root";
  $senha = "cito";


  $con = new conectar();
  $con->conexao($host,$db,$user,$senha);

  $add = new CRUD();
  $add->incluir();

?>
