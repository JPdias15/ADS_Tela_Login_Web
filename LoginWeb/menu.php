<?php
session_start();
if (isset($_POST['usuario'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if ($usuario == 'teste' && $senha == 'teste') {
    
        $_SESSION['nome'] = 'Osvaldo Cesar';
    } else {
        $_SESSION ['msg'] = "Usuário ou senha incorretos!!!'";
        header("Location: index.php");
        exit;
    }
} else if  (!isset($_SESSION['nome'])) {
    header("Location: index.php");
    exit;
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Página de Menu</title>
    </head>
    <body>
        <h1>Usuário logado: <?php echo $_SESSION['nome'] ?></h1>
        <div>
            <a href="menu.php"> Home </a>
            <a href="logout.php"> Sair </a>
        </div>
    </body>
</html>