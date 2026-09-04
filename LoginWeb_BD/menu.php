<?php
include_once './database.php';
include_once './usuario.php';
session_start();
if (isset($_POST['usuario'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $consulta = mysqli_query($conexao, "select cod, nome, login, senha from usuario where login = '" . $usuario . "'");
    $dados = mysqli_fetch_assoc($consulta);
    $user = null;
    if ($dados != null) {
        $user = new Usuario($dados["cod"], $dados["nome"], $dados["login"], $dados["senha"]);
    }
    
    if ($user != null && $user->validaUsuarioSenha($usuario, $senha)){
        $_SESSION['user'] = $user;
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
        <link rel="stylesheet" type="text/css" href="login.css"/>
    </head>
    <body>
        Usuário logado: <?php echo $_SESSION['user']->nome ?>
        <div class="menu">
            <a href="menu.php"> Home </a>
            <a href="listar.php"> Listar </a>
            <a href="cadastrar.php"> Cadastrar </a>
            <a href="logout.php"> Sair </a>
        </div>
    </body>
</html>