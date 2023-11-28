<?php
session_start(); // Inicie a sessão

// Destrua a sessão para efetuar o logout
session_destroy();

// Redirecione o usuário de volta para a página de login ou qualquer outra página desejada
header("Location: login.php"); // Substitua "login.php" pela página que deseja redirecionar
exit;
?>
