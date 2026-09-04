<?php
include_once './database.php';
include_once './usuario.php';
session_start();

if (!isset($_SESSION['user'])) {
    $_SESSION['msg'] = 'É necessário logar antes de acessar a página de menu!!!';
    header("Location: index.php");
    exit;
}

if(isset($_POST['nome'])){
    $consulta = mysqli_query($conexao, 
        "insert into usuario(nome, login, senha) values ('".$_POST['nome']."','".$_POST['login']."','".$_POST['senha']."')");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Página de Menu</title>
        <link rel="stylesheet" type="text/css" href="login.css"/>
    </head>
    <body>
        Usuário logado: <?php echo $_SESSION['user']->nome; ?>
        <div class="menu">
            <a href="menu.php"> Home </a> |
            <a href="listar.php"> Listar </a> |
            <a href="cadastrar.php"> Cadastrar </a> |
            <a href="logout.php"> Sair </a>
        </div>
        <div class="content">
            <form action="cadastrar.php" method="POST">
                <fieldset style="width: 0;">
                    <legend>Dados de Usuário</legend>
                    <table>
                        <tbody>
                            <tr>
                                <td>Nome:</td>
                                <td><input type="text" name="nome"/></td>
                            </tr>
                            <tr>
                                <td>Login:</td>
                                <td><input type="text" name="login"/></td>
                            </tr>
                            <tr>
                                <td>Senha:</td>
                                <td><input type="password" name="senha"/></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="submit" value="Cadastrar"/></td>
                            </tr>
                        </tbody>
                    </table>
                </fieldset>
            </form>
        </div>
    </body>
</html>