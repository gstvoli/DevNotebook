<?php
var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Novo Post - DevNotebook</title>
    </head>
    <body>
        <form method="POST" action="">
            <label>                
                Título:
            <input type="text" name="title" required>
            </label>
            <br><br>

            <label>
                Data:
                <input type="date" name="data" required>    
            </label>
            <br><br>

            <label>
                Tags (separe por vírgula):
                <input type="text" name="tags" placeholder="php, sqlite, estudo">    
            </label>
            <br><br>

            <label>
                Conteúdo (markdown):
                <textarea name="content" rows="15" cols="80" required></textarea>
            </label>
            <br><br>

            <button type="submit">Salvar</button>
        </form>
        <br>
        <p><a href="index.php">Voltar para home</a></p>
    </body>
</html>