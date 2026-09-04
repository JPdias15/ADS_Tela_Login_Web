<?php
class Usuario {
    public $codigo, $nome, $login, $senha;
    
    function __construct($codigo, $nome, $login, $senha) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->senha = $senha;
        $this->login = $login;
    }
    
    function validaUsuarioSenha($login, $senha){
        if($login == $this->login && $senha == $this->senha){
            return true;
        }
        return false;
    }
}
?>
