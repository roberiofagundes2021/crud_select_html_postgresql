<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'ItensVenda.php';

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>cadastrar vendas</title>
</head>
<body>
	<h2>cadastro de vendas</h2>

	<fieldset>
    <form method='post' action="">

       <label for='iditensvendas'> iditensvendas:</label><br><br>
        <input type="text" name="iditensvendas"/><br><br>

    <label for='idvenda'> idvenda</label><br><br>
    	<input type="text" name="idvenda"/><br><br>

    <label for='idproduto'> idproduto: </label>    
    	<input type="text" name="idproduto"/><br><br>

     <label for='quantidade'> quantidade: </label>    
        <input type="text" name="quantidade"/><br><br>

     <label for='valorvenda'> valorvenda: </label>    
        <input type="text" name="valorvenda"/><br><br>

     <label for='desconto'>desconto: </label>    
        <input type="text" name="desconto"/><br><br>

    	 <input type="submit" value="cadastrar" name="cadastrar"/>
        
    </form>
	</fieldset>

		<?php
    
      $CrudItensVendas = new ItensVendas;
      if(isset($_POST['cadastrar'])):
            
            $iditensvendas = $_POST['iditensvendas'];
            $idvenda = $_POST['idvenda'];
            $idproduto = $_POST['idproduto'];
            $quantidade = $_POST['quantidade'];
            $valorvenda = $_POST['valorvenda'];
            $desconto = $_POST['desconto'];
           
    
            $CrudItensVendas ->setIdItensVenda($iditensvendas);
            $CrudItensVendas ->setIdVenda($idvenda);
            $CrudItensVendas ->setIdProduto($idproduto);
            $CrudItensVendas ->setQuantidade($quantidade);
             $CrudItensVendas->setValorVenda($valorvenda);
             $CrudItensVendas->setDesconto($desconto);
            
            if($CrudItensVendas->insert()){
                echo "itens_vendas ". $iditensvendas. " inserido com sucesso";
            }
      endif;
    ?>

</body>
</html>

