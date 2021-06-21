<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'Venda.php';


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title class="titulo">cadastrar vendas</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
        <body>
        	<h2>cadastro de vendas</h2>

	       <fieldset class="formulario">
                <form method='post' action="">
                    <label class="dados" for='idcliente'> nome do cliente:</label><br><br>
                    <select name="idcliente">
                        <option> selecione </option>
                        <option>
                            <?php
                                /*
                                * Método de conexão sem padrões
                                */

                                $username = 'postgres';
                                $password = '123456';

                                try {
                                    $conn = new PDO('pgsql:host=localhost;dbname=John2', $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $data = $conn->query('SELECT nomecliente, idcliente FROM cliente');

                                    foreach($data as $row) {
                                         echo  '<option value="'.$row['idcliente'].'">'.$row['nomecliente'].'-'.$row['idcliente'].'</option>';

                                    }
                                } catch(PDOException $e) {
                                    echo 'ERROR: ' . $e->getMessage();
                                }
                            ?>
                    
                        </option>
                     </select><br><br>

                    <label class="dados" for='idvenda'> idvenda:</label><br><br>
                    <input class="dados" type="text" name="idvenda"/><br><br>
                    

                   <label class="dados" for='datavenda'> datavenda: </label>    
    	           <input class="" type="date" name="datavenda"/><br><br>
                   <input class="botao" type="submit" value="cadastrar" name="cadastrar"/> 
                </form>
	        </fieldset>

	<?php
    
      $CrudVendas = new Vendas;
      if(isset($_POST['cadastrar'])):
            
            $idcliente = $_POST['idcliente'];
            $datavenda = $_POST['datavenda'];
            $idvenda = $_POST['idvenda'];
           
    
            $CrudVendas->setIdCliente($idcliente);
            $CrudVendas->setDataVenda($datavenda);
            $CrudVendas->setIdVenda($idvenda);
            

            if($CrudVendas->insert()){
                echo "vendas ". $idcliente. " inserido com sucesso";
            }
      endif;
    ?>

</body>
</html>

