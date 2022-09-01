<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>

<div class="resultado">
        <?php
        
            require 'controller/con.php';

            $stmt = $pdo->query('SELECT * FROM produto');

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

</div>      


</body>
</html>