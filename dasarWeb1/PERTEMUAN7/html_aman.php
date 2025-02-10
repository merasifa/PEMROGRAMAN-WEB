<?php

if (isset($_POST['input']) && isset($_POST['email'])) {

    $input = $_POST['input'];
    $email = $_POST['email'];

    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Input yang Anda masukkan adalah: " . $input . "<br>";
        echo "Email yang Anda masukkan adalah: " . $email;
    } else {
        echo "Email yang Anda masukkan tidak valid.";
    }
} else {
    echo "Tidak ada input yang diterima.";
}
?>
