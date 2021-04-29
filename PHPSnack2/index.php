<?php
$nome = $_GET['nome'];
$email = $_GET['email'];
$age = $_GET['age'];
if (strpos($email, '@') && strpos($email, '.')) {
    $validEmail = true;
} else {
    $validEmail= false;
}

if (strlen($nome) >= 3 && filter_var($age, FILTER_VALIDATE_INT) && $validEmail) {
    echo "Accesso riuscito";
} else {
    echo "Accesso non riuscito";
}