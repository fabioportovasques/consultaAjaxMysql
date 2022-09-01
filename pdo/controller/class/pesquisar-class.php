<?php 

// var_dump($_POST);

require 'conexao.php';

$submit = $_POST['submit'];

$consulta = $pdo->query("SELECT * FROM produto WHERE codProd like  '".$_POST['submit']."' ");

// $consulta= "SELECT * FROM produto WHERE codProd like  '".$_POST['submit']."' ";



while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    echo "<br />";
    echo "Codigo: {$linha['codProd']} <br />";
    echo "Nome: {$linha['nomeProd']} <br />";
    echo "Descrição: {$linha['descProd']} <br />";

}




?>