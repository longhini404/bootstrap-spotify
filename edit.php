<?php

session_start();

$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];

try {
    $dataNascimento = "$year-$month-$day";
    $date = new DateTime($dataNascimento);
    $intervalo = $date->diff(new DateTime(date('Y-m-d')));
    echo $intervalo->format('%Y anos');

    if ($intervalo->format('%Y') < 14) {
        $_SESSION['mensagem_erro'] = "Menor de idade";
    } else {
        $_SESSION['mensagem_sucesso'] = "Perfil salvo";
        $_SESSION['day'] = $_POST['day'];
        $_SESSION['month'] = $_POST['month'];
        $_SESSION['year'] = $_POST['year'];
    }
} catch (Exception $e) {
    $_SESSION['mensagem_erro'] = "Data de nascimento inválida";
}

$_SESSION['email'] = $_POST['email'];
$_SESSION['sex'] = $_POST['sex'];
$_SESSION['country'] = $_POST['country'];
$_SESSION['checkbox'] = $_POST['checkbox'];

header("Location: editar-perfil.php");
