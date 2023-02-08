<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
    <h3>Enviar correo</h3>
    <form action="enviar.php" method="post" name="post">
        <label for="correo">Correo</label>
        <input type="text" name="correo" id="correo"><br><br>
        <label for="asunto">Asunto</label>
        <input type="text" name="asunto" id="asunto"><br><br>
        <label for="mensaje">Mensaje</label>
        <textarea name="mensaje" id="mensaje"></textarea id="mensaje"><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>