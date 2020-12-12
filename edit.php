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
    }
} catch (Exception $e) {
    $_SESSION['mensagem_erro'] = "Data de nascimento inválida";
}

header("Location: editar-perfil.php");
