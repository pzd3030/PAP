<!DOCTYPE HTML>
<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site";

// Conecta ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
	die("Erro na conexão com o banco de dados: " . $conn->connect_error);
	
}

$id_user = $_SESSION['id'];

$sql = "SELECT * FROM perfis WHERE ID=$id_user";
$result_user = $conn->query($sql);
$row_user = $result_user->fetch_assoc();

$name_user = $row_user['Nome_usuario'];

?>

<html>
	<head>
		<title>nese</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">	
		<div id="wrapper">
			<div id="main">
				<div class="inner">
					<!-- Header -->
					<header id="header">	
                        <a href="indice.php" class="logo"><strong>SITE</strong> Verde</a>
					</header>
					<h2>Creep </h2>
					<h3>Radiohead</h3>
					<h3>Afinação: E A D G B e </h3>
					
					<h3>Autor da cifra: EUUUU</h3>
			
					<section id="banner">
						<div class="content">
							<div style="background-color: #1b1a1a; min-height: 100px; overflow:hidden; max-width: 660px;border-radius: 20px;" >
								<pre>
    [Intro]
    G B C Cm
 
    [Verse 1]
    G B
    When you were here before, couldn't look you in the eyes
    C Cm
    You're just like an angel, your skin makes me cry
    G B
    You float like a feather in a beautiful world
    C Cm
    I wish I was special, you're so fucking special
 
    [Chorus] (play loud)
    Cm
    (x3, very short)
    G B
    But I'm a creep, I'm a weirdo
    C Cm
    What the hell am I doing here? I don't belong here
 
    [Verse 2]
    G B
    I don't care if it hurts, I wanna have control
    C Cm
    I want a perfect body, I want a perfect soul
    G B
    I want you to notice when I'm not around
    C Cm
    You're so fucking special, I wish I was special
 
    [Chorus] (play loud)
    Cm
    (x3, very short)
    G B
    But I'm a creep, I'm a weirdo
    C Cm
    What the hell am I doing here? I don't belong here
 
    [Bridge] (play loud)
    G B
    Oooh, oooh, she's running out the door...
    C Cm
    She's running out, she run, run, run...
    G B
    Ruuuuuuuun...
    C Cm
    Ruuuuuuuuuuun...
 
    [Verse 3] (play soft until the end)
    G B
    Whatever makes you happy, whatever you want
    C Cm
    You're so fucking special, I wish I was special
 
    [Chorus]
    G B
    But I'm a creep, I'm a weirdo
    C Cm
    What the hell am I doing here? I don't belong here
    G
    I don't belong here
								</pre>
							</div>
						</section>

						<!DOCTYPE HTML>
						<html>
						<head>
						    <title>Comentários</title>
						    <meta charset="utf-8" />
						</head>
						<body>
						    <h1>Deixe seu comentário</h1>   
						    <form action="processa_comentario.php" method="post">
						        <label for="comentario">Comentário:</label><br>
						        <input style="width: 800px; height:36.6px;" type="text" id="comentario" name="comentario" required><br>
								<input type="hidden" id="nome_user" name="nome_user" value="<?php echo $name_user ?>">

						        <input type="submit" value="Enviar Comentário">
						    </form>
						    <?php

						    // Query para selecionar todos os comentários
						    $query = "SELECT nome, comentario, data_publicacao FROM comentarios ORDER BY data_publicacao DESC";

						    $result = $conn->query($query);

						    // Verifica se há comentários
						    if ($result->num_rows > 0) {
						        while ($row = $result->fetch_assoc()) {
						            $nome = $row["nome"];
						            $comentario = $row["comentario"];
						            $data_publicacao = $row["data_publicacao"];

						            echo "De <strong>$nome</strong> em $data_publicacao:<br>$comentario<br><br>";
						        }
						    } else {
						        echo "Nenhum comentário encontrado.";
						    }

						    $conn->close();
						    ?>

						</body>
						</html>

					</div>
				</div>

				<div id="sidebar">
					<div class="inner">
						<!-- Menu -->
						<nav id="menu">
							<header class="major">
								<h2>Menu</h2>
							</header>
							<ul>
								<li><a href="indice.php">Homepage</a></li>
								<li><a href="cifras.php">Minhas Cifras</a></li>
								<li><a href="perfis.php">Perfis</a></li>
								<a href="#" class="image"><img src="images/pic07.jpg" alt=""></a>	
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>
