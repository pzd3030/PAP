<?php
session_start(); // Inicie a sessão

// Verifique se a sessão está configurada (neste caso, se o usuário já fez login)
if (isset($_SESSION['id'])) {
    // O usuário já fez login, você pode redirecioná-lo para outra página se desejar
    header("Location: perfis.php");
    exit; // Encerre o script para evitar que o restante do código seja executado
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Login</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>
    <h1>Login</h1>

    <form action="processalogin.php" method="post">
        <label for="email">Email:</label>
        <input style="width: 300px; height:36.66px;" type="text" id="email" name="email" required><br>

        <label for="senha">Senha:</label>
        <input style="width: 300px; height:36.66px;" type="password" id="senha" name="senha" required><br>

        
        <input type="submit" value="Entrar">
        <a href="registro.php">ainda não tem uma conta?</a>
    </form>

</body>
</html>
