<?php
// Conecte-se ao banco de dados (substitua com suas próprias credenciais)
$servername = "seuserver";
$username = "root";
$password = "";
$dbname = "site";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Consulta para obter dados da tabela chords_tab
$sql = "SELECT song_title, artist, chord_notation, tab_notation FROM chords_tab WHERE id = SEUID"; // Substitua SEUID pelo ID desejado

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<h2>" . $row["song_title"] . "</h2>";
    echo "<p>Artista: " . $row["artist"] . "</p>";
    echo "<h3>Notação de Acordes:</h3>";
    echo "<pre>" . $row["chord_notation"] . "</pre>";
    echo "<h3>Notação de Tab:</h3>";
    echo "<pre>" . $row["tab_notation"] . "</pre>";
} else {
    echo "Conteúdo não encontrado.";
}

$conn->close();
?>
