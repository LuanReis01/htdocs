<?php

session_start();
require_once 'conexao.php';
if(isset($_POST['bt_cadastrar'])) {

    $nome = mysqli_real_escape_string($con, $_POST ['nome']);
    $nacionalidade = mysqli_real_escape_string($con, $_POST ['nome']);
    $estado_civil = mysqli_real_escape_string($con, $_POST ['nome']);
    $idade = mysqli_real_escape_string($con, $_POST ['nome']);
    $endereco = mysqli_real_escape_string($con, $_POST ['nome']);
    $telemovel = mysqli_real_escape_string($con, $_POST ['nome']);
    $email = mysqli_real_escape_string($con, $_POST ['nome']);
    $senha = md5(mysqli_real_escape_string($con, $_POST ['nome']));

    $sql = "INSERT INTO usuarios(nome, nacionalidade, estado_civil, idade, endereco, telemovel, email, senha)
    VALUE ('$nome', '$nacionalidade', '$estado_civil', '$idade', '$endereco', '$telemovel', '$email', '$senha')";

    if(mysqli_query($con, $sql)) {
        $_SESSION['mensagem'] = "Cadastro realizado com sucesso";
        header('Location: ../index.php');
    } else {
        $_SESSION['mensagem'] = "Não foi possível cadastrar";
        header('Location: ../index.php'); 
    }

    mysqli_close($con);

};

