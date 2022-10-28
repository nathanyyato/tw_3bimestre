<?php
require "conexao.php";

$email = isset($_POST['email']) ? $_POST['email'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";
$nome = isset($_POST['name']) ? $_POST['name'] : "";

if(!$email or !$password) {
    echo "Email/senha inválidos";
} else {
    $hash = md5($password);
    $sql = "INSERT INTO usuario (nome, email, senha) values ('$nome', '$email', '$hash')";
    mysqli_query($conexao, $sql);
    header('Location: ../index.html');
}
