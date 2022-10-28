<?php
require "conexao.php";

$email = isset($_POST['email']) ? $_POST['email'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";
$perfil = isset($_POST['perfil']) ? $_POST['perfil'] : "";

function erros() {
    echo "Email/senha inválidos";
}

if(!$email or !$password) {
    erros();
} else {
    $sql = "SELECT * from usuario where email = '$email' and senha = 'md5($password)'";
    $user = mysqli_query($conexao, $sql);
    if(count($user) <= 0) {
        erros();
    } else {
        session_start();
        $_SESSION['user'] = $user;
        if ($perfil === 'adm') {
            header("Location: ./adm.php");
        } else {
            header("Location: ../content.html");
        }
    }
}
