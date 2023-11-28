<?php
// Configurações de conexão com o banco de dados
$servername = "localhost";
$username = "root"; // Substitua pelo nome de usuário do seu banco de dados
$password = ""; // Substitua pela senha do seu banco de dados
$dbname = "site";

// Criar uma conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

$id = $_SESSION['id'];

// Consulta SQL para buscar os dados do usuário (substitua com sua própria lógica de consulta)
$query = "SELECT Email, Nome, Nome_usuario FROM perfis WHERE ID = $id"; // Supondo que o ID do usuário seja 1

$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $email = $row["Email"];
    $nome = $row["Nome"];
    $nomeUsuario = $row["Nome_usuario"];
    
    echo "Email: " . $email . "<br>";
    echo "Nome: " . $nome . "<br>";
    echo "Nome de Usuário: " . $nomeUsuario . "<br>";
} else {
    echo "Nenhum usuário encontrado";
}

$conn->close();
?>
