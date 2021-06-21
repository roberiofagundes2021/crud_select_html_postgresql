<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'produto.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>cadastrar de produto</title>
</head>
<body>
	<h2>cadastro de produto</h2>

	<fieldset>
   
    <form method='post' action="">

       <label for='idproduto '> idproduto:</label><br><br>
        <input type="text" name="idproduto"/><br><br>

    <label for='nomedoproduto'> nomedoproduto:</label><br><br>
    	<input type="text" name="nomedoproduto"/><br><br>

    <label for='idmarca'> idmarca </label>    
    	<input type="text" name="idmarca"/><br><br>

      <label for='idcategoria'> idcategoria: </label>    
        <input type="text" name="idcategoria"/><br><br>

     <label for=' datavencimento'> datavencimento</label>    
        <input type="text" name="datavencimento"/><br><br>

    	 <input type="submit" value="cadastrar" name="cadastrar"/>
        
    </form>
	</fieldset>

		<?php
    
      $CrudProdutos = new Produtos;
      if(isset($_POST['cadastrar'])):
            
            $idproduto = $_POST['idproduto'];
            $nomedoproduto = $_POST['nomedoproduto'];
            $idmarca = $_POST['idmarca'];
            $idcategoria = $_POST['idcategoria'];
            $datavencimento = $_POST['datavencimento'];

            $CrudProdutos->setIdProduto($idproduto);
            $CrudProdutos->setNomeProduto($nomedoproduto);
            $CrudProdutos->setIdMarca($idmarca);
            $CrudProdutos->setCategoria($idcategoria);
            $CrudProdutos-> setDataVencimento($datavencimento);
            

            if($CrudProdutos->insert()){
                echo "Produtos ". $idproduto. " inserido com sucesso";
            }
      endif;
    ?>

</body>
</html>

