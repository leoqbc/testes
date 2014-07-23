<?php

  include("teste.php");
  //Mudando este arquivo pelo windows!
  $class = new Sublime_Class("Mensagem passada pela minha classe");
 
  var_dump($class);

  Sublime_Class::openMsg();
?>
