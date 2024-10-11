<?php
require_once "classes/Usuario.php";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = intval($_POST['id']);
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $status = $_POST['status']??false;

    $usuario = new Usuario($nome, $email, $cpf, $senha, $id, $status);
    
    if($id) {
    } else {
        if($usuario->inserir()) {
            echo "Usuario cadastrado!";
        } else {
            echo "Erro: Não cadastrou!";
        }
    }
}