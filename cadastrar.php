<?php
    require_once("menu.php");
    session_start();
    
    if (!isset($_SESSION ["cadastros"])){
          
         $_SESSION["cadastros"] = array ();
         
    }
   
   $nome = $_REQUEST ["nome"];
   $prazo = $_REQUEST ["prazo"];
   $produtonovo = $_REQUEST ["produto novo"];
   $cor = $_REQUEST ["cor"];
   $detalhes = $_REQUEST ["detalhes"];
   $aceito = $_REQUEST ["aceito"];
  
   
   $aceito = false;
   if (isset($_REQUEST ["aceito"])){
        $aceito = true;
    
   }
   
   $produto = array();
   $produto ["nome"] = $nome;
   $produto ["prazo"] = $prazo;
   $produto ["produtonovo"] = $produtonovo;
   $produto ["cor"] = $cor;
   $produto ["detalhes"] = $detalhes;
   $produto ["aceito"] = $aceito
   
   
   
   array_push($_SESSION ["cadastros"], $produto);
   
   echo "Cadastro efetuado com sucesso!" ;
   
?>
