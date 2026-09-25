<?php
$title = '';
$date = '';
$tags = '';
$content = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $title = $_POST['title']     ?? '';
    $date = $_POST['date']       ?? '';
    $tags = $_POST['tags']       ?? '';
    $content = $_POST['content'] ?? '';
}
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
            <input type="text" name="title" value="<?php echo htmlspecialchars($title); ?>" required>
            </label>
            <br><br>

            <label>
                Data:
                <input type="date" name="date" value="<?php echo htmlspecialchars($date); ?>" required>    
            </label>
            <br><br>

            <label>
                Tags (separe por vírgula):
                <input type="text" name="tags" value="<?php echo htmlspecialchars($tags); ?>" placeholder="php, sqlite, estudo">    
            </label>
            <br><br>

            <label>
                Conteúdo (markdown):
                <textarea name="content" rows="15" cols="80" required><?php echo htmlspecialchars($content)?> </textarea>
            </label>
            <br><br>

            <button type="submit">Salvar</button>
        </form>
        <br>
        <p><a href="index.php">Voltar para home</a></p>

        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
            <div style="border: 1px solid green; padding: 12px; margin-bottom: 20px;">
                <h2>Dados Recebidos:</h2>
                <p><strong>Título:</strong><?php echo htmlspecialchars($title) ?></p>
                <p><strong>Data:</strong><?php echo htmlspecialchars($date) ?></p>
                <p><strong>Tags:</strong><?php echo htmlspecialchars($tags) ?></p>
                <p><strong>Conteúdo:</strong></p>
                <pre><?php echo htmlspecialchars($content) ?></pre>
            </div>
        <?php endif; ?>
    </body>
</html>