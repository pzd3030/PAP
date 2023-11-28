
<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION["id"])) {
    // O usuário está autenticado
} else {
    header("Location: login.php"); // Redirecione para a página de login se não estiver autenticado
}
?>

<html>
	<head>
		<title>CHORDREALM</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<!-- Content -->
							<body>								
								<h1 style="color:#2c701f">Crie a sua Cifra</h1>
								<form id="tablatura-form" action="tabs.php" method="post">
									<label for="titulo">Nome da Música:</label>
									<input color=#202124 type="text" id="titulo" name="song_title" required><br><br>
									
									<label for="artista">Artista:</label>
									<input type="text" id="artista" name="artist" required ><br><br>

								<select style="width: 300px; height:36.66px;" id="tab_notation" name="tab_notation">
									<option value="E A D B G e">E A D G B e</option>
									<option value="Eb Ab Db Bb Gb eb">Eb Ab Db Gb Bb eb</option>
									<option value="D G C F A D">D C G F A D</option>
									<option value="D A D G A D">D A D G A D</option>
									<option value="C# G# C# F# A# D#">C# G# C# F# A# D#</option>
									<option value="D G D G B D">D G D G B D</option>
									<option value="C G C G C E">C G C G C E</option>
									<option value="E# A# D# G B E">E# A# D# G B E</option>
									<option value="A E A D Gb B">A E A D Gb B</option>
							
</select>
									
							
									<main2>
								
										<section>	
																			
											<br>											
										</main2>
									</section>
									
										</script>
</main2>								
									<label for="acordes">Letra & Acordes:</label>
									<textarea required style="width: 632px; height:700px;"  name="chord_notation" rows="10" cols="50"></textarea><br><br>
								
										<input type="submit" value="Enviar" href="perfil.php">
									</form>
								</form>							
							</body>
								<section>
									<header class="main">										
						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">	
						<div class="inner">
							<nav id="menu">
								<header class="major">
									<h2>Menu</h2>
								</header>
								<ul>
									<li><a href="indice.php">Homepage</a></li>
									<li><a href="cifras.php">Minhas Cifras</a></li>
									<li><a href="perfis.php">Perfis</a></li>
									
									<li></li>
										
								</ul>
							</nav>
							
			</div>

			<script>
				
				function mostrarCaixaTexto() {
					var caixaDeTexto = document.getElementById("tab-content");
					caixaDeTexto.style.display = "block"; 
				}			
				var botao = document.getElementById("mostrarBotao");
				botao.addEventListener("click", mostrarCaixaTexto);
			</script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>