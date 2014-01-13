</style>
<?php

    require_once("menu.php");
    
    session_start();
    
    if (isset($_SESSION["cadastros"])){
          
         $cadastros = $_SESSION ["cadastros"];
         
         echo "<dl>";
         foreach ($cadastros as $produto) {
            $prazo = $produto ["prazo"];
            $aceito = $produto ["aceito"];
            $detalhes = $produto["detalhes"];
            
            
            if ($produto != null){
                echo"<fieldset>;
                
                echo"<dd>Detalhes: " . $Detalhes . "</dd>";     
                echo "<dd>Produto Novo: ";
                if ($produtonovo){
                    echo "Sim";
                }
                else{
                    echo "Não";
                }
                echo "</dd>";
            }
         }
         echo"</dl>";
    }
    else {
        echo "Não existem produtos cadastradas" ;
    }
?>
