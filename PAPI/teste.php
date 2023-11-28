<?php
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "site";

// Conecta ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

if (isset($_GET['id_cifra'])) {
    $id_cifra = $_GET['id_cifra'];

    $sql = "SELECT * FROM chords_tab WHERE id_cifra = $id_cifra";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Exibe os dados da cifra conforme necessário
            echo "ID da Cifra: " . $row["id_cifra"] . "<br>";
            echo "Título: " . $row["song_title"] . "<br>";
            echo "Artista: " . $row["artist"] . "<br>";
            echo "Notação de Acordes: " . $row["chord_notation"] . "<br>";
            echo "Notação de Tablatura: " . $row["tab_notation"] . "<br>";
        }
    } else {
        echo "Nenhuma cifra encontrada.";
    }
} else {
    echo "ID da cifra não fornecido.";
}

$conn->close();
?>
