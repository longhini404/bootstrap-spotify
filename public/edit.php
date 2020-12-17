<?php

sleep(1);

session_start();

$email = isset($_POST['email']) ? $_POST['email'] : null;
$sex = isset($_POST['sex']) ? $_POST['sex'] : null;
$day = isset($_POST['day']) ? $_POST['day'] : null;
$month = isset($_POST['month']) ? $_POST['month'] : null;
$year = isset($_POST['year']) ? $_POST['year'] : null;

if (empty($email) || empty($sex) || empty($day) || empty($month) || empty($year)) {
    $_SESSION['mensagem_erro'] = "Preencha todos os campos";
    exit(header("Location: editar-perfil.php"));
}

try {
    $dataNascimento = "$year-$month-$day";
    $date = new DateTime($dataNascimento);
    $intervalo = $date->diff(new DateTime(date('Y-m-d')));
    echo $intervalo->format('%Y anos');

    if ($intervalo->format('%Y') < 14) {
        $_SESSION['mensagem_erro'] = "Menor de idade";
    } else {
        $_SESSION['mensagem_sucesso'] = "Perfil salvo";
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['sex'] = $_POST['sex'];
        $_SESSION['day'] = $_POST['day'];
        $_SESSION['month'] = $_POST['month'];
        $_SESSION['year'] = $_POST['year'];
        $_SESSION['country'] = $_POST['country'];
        $_SESSION['checkbox'] = $_POST['checkbox'];
    }
} catch (Exception $e) {
    $_SESSION['mensagem_erro'] = "Data de nascimento inválida";
}

exit(header("Location: editar-perfil.php"));
