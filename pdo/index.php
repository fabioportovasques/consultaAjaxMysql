<?php 
    include 'controller/class/exibir-class.php';


    $exibir = new Exibir();

    $lista = $exibir->getCod();
       foreach ($lista as $item):


?>
<?php endforeach; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <!-- <form method="POST" action="controller/class/pesquisar-class.php"> -->
    <form>
        <label>Busca sem refresch</label><br />
        <input type="text" name="campo">
        <input type="submit" onclick="click()" id="submit" value="Entrar">
    </form>


    <div id="resultado">


    <div class="table-responsive-sm">
		  <table class="table">
            <thead class="thead-dark">
            <tr>                
                <th scope="col">Codigo do produto</th>
                <th scope="col">Nome do Produto</th>
                <th scope="col">Descrição do produto</th>
            </tr>
            </thead>
                <tbody>

                <?php foreach ($lista as $item){
					  ?>
						    <tr>
						      <td><?php echo $item['codProd']; ?></td>
						      <td><?php echo $item['nomProd']; ?></td>
						      <td><?php echo $item['descProd']; ?></td>
						    </tr>
						 <?php
		}
?>   
					  </tbody>
		</table> 


          

    </div>
    <!-- <button onclick="click()">Enviar</button> -->

    <!-- <script src="controller/class/js/js.js"></script> -->
</body>
</html>