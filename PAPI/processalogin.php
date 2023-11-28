<?php
session_start();

// Verifique se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    

    // Configurações de conexão com o banco de dados
    $servername = "localhost";
    $username = "root"; // Substitua pelo seu nome de usuário do banco de dados
    $password = ""; // Substitua pela sua senha do banco de dados
    $dbname = "Site";

    // Dados do formulário de login
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifique a conexão
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Consulta SQL para verificar o login
    $query = "SELECT ID, Nome FROM perfis WHERE Email = '$email' AND Senha = '$senha'";

    $result = $conn->query($query);

    // Verifique se o login é válido
    if ($result->num_rows > 0) {
        // Login bem-sucedido
        $row = $result->fetch_assoc();
        $id = $row["ID"];
        $nome = $row["Nome"];

        // Inicie a sessão
        $_SESSION['id'] = $id;
        $_SESSION['nome'] = $nome;

        // Redirecione para a página de perfil ou outra página desejada
        header("Location: perfis.php");
    } else {
        // Credenciais inválidas
        echo "Credenciais inválidas. Tente novamente.";
    }

    // Feche a conexão com o banco de dados
    $conn->close();
} elseif (!isset($_SESSION['id'])) {
    // Redirecionar para a página de login apenas se a sessão não estiver configurada
    header("Location: login.php");
}

?>
