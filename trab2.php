<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="processar_upload.php" method="post" enctype="multipart/form-data">
        <label for="imagem">Uma imagem:</label>
        <input type="file" id="imagem" name="imagem">
        <input type="submit" value="Enviar">
    </form>
    <form action="processar_upload.php" method="post" enctype="multipart/form-data">
        <label for="pdf">Arquivo PDF:</label>
        <input type="file" id="pdf" name="pdf">
        <input type="submit" value="Enviar">
    </form>
<body>
    <a href="arq.pdf">Download Aqui</a>
    <img src="img.png">
</body>
</html>