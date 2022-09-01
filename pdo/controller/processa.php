<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


<?php

require 'con.php';

//$campo =$_POST['campo'];

$stmt = $pdo->query("SELECT * FROM produto where codProd like '%".$_POST['consultar']."%' ");

?>

<table>
    <thead>
        <tr>
            <td>Codigo</td>
            <td>Nome</td>
            <td>Descrição</td>
        </tr>
    </thead>    
<?php 

while ($row = $stmt->fetch())
{

    ?>

    <tbody>
        <tr>
            <td><?php echo $row['codProd']; ?></td>
            <td><?php echo $row['nomeProd']; ?></td>
            <td><?php echo $row['descProd']; ?></td>


        </tr>
    </tbody>    

    <?php
}



?>
