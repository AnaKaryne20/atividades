<?php
    require_once("menu.php");
    session_start();
    
    if (!isset($_SESSION ["cadastros"])){
          
         $_SESSION["cadastros"] = array ();
         
    }
   
   $produto = $_REQUEST ["produto "];
  
   
   $aceito = false;
   if (isset($_REQUEST ["aceito"])){
        $aceito = true;
    
   }
   
   $pessoa = array();
   $pessoa ["produto"] = $produto;
   
   
   
   
   array_push($_SESSION ["cadastros"], $pessoa);
   
   echo "Cadastro efetuado com sucesso!" ;
   
   ?>
