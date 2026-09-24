<?php
$mensagem = "Hello World";
$data = date('d/m/Y H:i');
$autor = "Gustavo";
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>DevNotebook</title>
    </head>
    <body>
        <h1><?php echo $mensagem; ?></h1>
        <p>Gerado em: <?php echo $data ?></p>
        <p>Autor: <?php echo $autor ?></p>
    </body>
</html>