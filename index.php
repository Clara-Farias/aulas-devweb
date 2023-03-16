<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="processa.php" method="POST">
        <label for="nome"></label>
        <input type="text" placeholder="Digite seu nome" name="nome"> <br>
        <input type="email" placeholder="Digite seu email" name="email"> <br>
        <input type="password" placeholder="Digite sua Senha" name="senha"> <br>

        <input type="submit" value="Enviar"> 
</body>
</html>