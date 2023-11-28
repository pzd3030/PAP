<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}


$song_title = $_POST['song_title'];
$artist = $_POST['artist'];
$chord_notation = $_POST['chord_notation'];
$tab_notation = $_POST['tab_notation'];


$sql = "INSERT INTO chords_tab (song_title, artist, chord_notation, tab_notation) VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);


    $stmt->bind_param("ssss", $song_title, $artist, $chord_notation, $tab_notation);

 
    if ($stmt->execute()) {
    header('Location: cifras.php');
    } else {
        echo "Erro ao inserir os dados: " . $stmt->error;
    }

    $stmt->close();


$conn->close();
?>
