<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <title>nese</title>
</head>
<body>
    <h1>Registro</h1>
    <form action="processar_registro.php" method="POST">
        <label for="email">Email:</label>
        <input style="width: 300px; height:36.66px;" type="text" id="email" name="email" required><br>

        <label for="senha">Senha:</label>
        <input style="width: 300px; height:36.66px;" type="password" id="senha" name="senha" required><br>

        <label for="nome">Nome:</label>
        <input style="width: 300px; height:36.66px;" type="text" id="nome" name="nome" required><br>

        <label for="nome_usuario">Nome de Usuário:</label>
        <input style="width: 300px; height:36.66px;" type="text" id="nome_usuario" name="nome_usuario" required><br>

        <input type="submit" value="Registrar">
    </form>
    <a href="login.php"> Já tem uma conta?</a>
</body>
</html>
