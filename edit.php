<?php

session_start();

// var_dump($_REQUEST);

// die();

$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];

try {
    $dataNascimento = "$year-$month-$day";
    $date = new DateTime($dataNascimento);
    $intervalo = $date->diff(new DateTime(date('Y-m-d')));
    echo $intervalo->format('%Y anos');

    if ($intervalo->format('%Y') < 14) {
        $_SESSION['mensagem'] = "Menor de idade";
    } else {
        $_SESSION['mensagem'] = "Perfil salvo";
    }
} catch (Exception $e) {
    $_SESSION['mensagem'] = "Data de nascimento inválida";
}

header("Location: editar-perfil.php");
