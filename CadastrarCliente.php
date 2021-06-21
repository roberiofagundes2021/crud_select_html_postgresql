<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'Clientes.php';

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>cadastrar cliente</title>
</head>
<body>
	<h2>cadastro de cliente</h2>

	<fieldset>
   
  
    <form method='post' action="">

       <label for='idvenda'> idcliente:</label><br><br>
        <input type="text" name="idcliente"/><br><br>

    <label for='nomecliente'> nome do cliente:</label><br><br>
    	<input type="text" name="nomecliente"/><br><br>

    <label for='cpfcliente'> cpf do cliente: </label>    
    	<input type="text" name="cpfcliente"/><br><br>

      <label for='rgcliente'> rg do cliente: </label>    
        <input type="text" name="rgcliente"/><br><br>

     <label for='sexocliente'> sexo do cliente: </label>    
        <input type="text" name="sexocliente"/><br><br>

     <label for='datanascimento'> data de nascimento </label>    
        <input type="text" name="datanascimento"/><br><br>

    	 <input type="submit" value="cadastrar" name="cadastrar"/>
        
    </form>
	</fieldset>

		<?php
    
      $CrudClientes = new Clientes;
      if(isset($_POST['cadastrar'])):
            
            $idcliente = $_POST['idcliente'];
            $nomecliente = $_POST['nomecliente'];
            $cpfcliente = $_POST['cpfcliente'];
            $rgcliente = $_POST['rgcliente'];
            $sexocliente = $_POST['sexocliente'];
            $datanascimento = $_POST['datanascimento'];

            $CrudClientes->setIdCliente($idcliente);
            $CrudClientes->setNome($nomecliente);
            $CrudClientes->setRgCliente($rgcliente);
            $CrudClientes->setSexoCliente($sexocliente);
            $CrudClientes->setDataNascimento($datanascimento);
            

            if($CrudClientes->insert()){
                echo "Cliente ". $idcliente. " inserido com sucesso";
            }
      endif;
    ?>

</body>
</html>

