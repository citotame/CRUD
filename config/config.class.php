<?php

  class conectar {

    public function conexao($host,$db,$username,$password){

      $conn = new PDO ("mysql:host=$host;dbname=$db", $username, $password);

    }
  }

?>
