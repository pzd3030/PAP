<!DOCTYPE HTML>
<html>
<head>
    <title>Resultado da Pesquisa</title>
    <meta charset="utf-8" />
</head>
<body>
    <h1>Resultado da Pesquisa</h1>
    <?php
    if (isset($_GET['termo_pesquisa'])) {
        // Conecte-se ao banco de dados
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "site";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Erro na conexão com o banco de dados: " . $conn->connect_error);
        }

        // Limpe e escape o termo de pesquisa
        $termo_pesquisa = mysqli_real_escape_string($conn, $_GET['termo_pesquisa']);

        // Query para pesquisar na tabela chords_tab
        $query = "SELECT song_title, artist, chord_notation, tab_notation FROM chords_tab WHERE 
                  song_title LIKE '%$termo_pesquisa%' OR 
                  artist LIKE '%$termo_pesquisa%' OR 
                  chord_notation LIKE '%$termo_pesquisa%' OR 
                  tab_notation LIKE '%$termo_pesquisa'";

        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            echo "<h2>Resultados da pesquisa:</h2>";
            while ($row = $result->fetch_assoc()) {
                echo "<h3><a href='cifra.php?song_title={$row['song_title']}'>{$row['song_title']} - {$row['artist']}</a></h3>";
                echo "<p>Acordes: {$row['chord_notation']}</p>";
            }
        } else {
            echo "Nenhum resultado encontrado.";
        }

        $conn->close();
    } else {
        echo "Por favor, insira um termo de pesquisa.";
    }
    // ...

if ($result->num_rows > 0) {
    echo "<h2>Resultados da pesquisa:</h2>";
    while ($row = $result->fetch_assoc()) {
        echo "<h3><a href='#' class='cifra-link' data-cifra-id='{$row['song_title']}'>{$row['song_title']} - {$row['artist']}</a></h3>";
        echo "<div id='{$row['song_title']}' style='display: none;'>";
        echo "<p>Acordes: {$row['chord_notation']}</p>";
        echo "<pre>{$row['tab_notation']}</pre>";
        echo "</div>";
    }
} else {
    echo "Nenhum resultado encontrado.";
}

// ...

    ?>
</body>
</html>
