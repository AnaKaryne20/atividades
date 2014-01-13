<?php
    require_once("menu.php");
    session_start();
    
    if (!isset($_SESSION ["cadastros"])){
        echo "Não existem pessoas para editar";
    }
    else{
        $id = $_REQUEST ["id"];
        $nome = $_REQUEST ["nome"];
        $prazo = $_REQUEST ["prazo"];
        $produtonovo = $_REQUEST["produtonovo"];
        $detalhes = $_REQUEST ["detalhes"];
        $aceito = $_REQUEST ["aceito"];
        
        
       $aceito = false;
   if (isset($_REQUEST ["aceito"])){
        $aceito = true;
   }
        
        $pessoa = array ();
        $pessoa["nome"] = $nome;
        $pessoa ["prazo"] = $prazo;
        $pessoa ["cor"] = $cor;
        $pessoa ["produtonovo"] = $produtonovo;
        $pessoa ["aceito"] = $aceito;
        $pessoa ["detalhes"] = $detalhes;
        $cadastro ["id"] = $produto;
        
        
        $cadastros =& $_SESSION["cadastros"];
        $cadastros[$id] = $pessoa;    
    }
   
   echo<center> "Edição efetuada com sucesso!</center>" ;
   
?>
