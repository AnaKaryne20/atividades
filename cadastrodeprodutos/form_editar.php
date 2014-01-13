  <title>Cadastro de produtos</title>
    </head>
    <body>
        <?php
            require_once("menu.php");
        ?>
        <form action="editar.php" method="post">
            <label>Digite o codigo da pessoa para editar:</label>
            <br/>
            <input type="text" name="id" />
            <br/>
            <label>Digite o novo nome da pessoa:</label>
            <br/>
            <?php require_once ("campos_pessoa.php");?> 
            <input type="submit" value="Editar" />
        </form>
    </body>
</html>   

<?php
    require_once("menu.php");
    
    session_start();
    
    if(isset($_SESSION["cadastros"])){
         $cadastros = $_SESSION ["cadastros"];
        
	foreach ($cadastros as $id => $produtos){
            if($produtos != null){
                echo "[$id] => " . $produtos["nome"] . "<br/>";
	    }
    	}
    }
    else{
        echo "Não existem produtos cadastradas";
    }
?>
