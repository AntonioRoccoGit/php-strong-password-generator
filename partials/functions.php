<?php
session_start();

if (isset($_GET['password-length'])) {
    $length = $_GET['password-length'];
    $want_repeat = $_GET['want-repeat'];

    if (isset($_GET['want-letter']) && isset($_GET['want-number']) && isset($_GET['want-symbol'])) {
        // caso tutte selezioni
        $new_array = array_merge($lower_case_array, $upper_case_array, $number_array, $symbol_array);
    }
    if (isset($_GET['want-letter']) && !(isset($_GET['want-number'])) && !(isset($_GET['want-symbol']))) {
        // caso solo lettere
        $new_array = array_merge($lower_case_array, $upper_case_array);
    }
    if (!(isset($_GET['want-letter'])) && !(isset($_GET['want-number'])) && isset($_GET['want-symbol'])) {
        // caso solo simboli
        $new_array = array_merge($symbol_array);
    }
    if (!(isset($_GET['want-letter'])) && isset($_GET['want-number']) && !(isset($_GET['want-symbol']))) {
        // caso solo numeri
        $new_array = array_merge($number_array);
    }
    if (isset($_GET['want-letter']) && isset($_GET['want-number']) && !(isset($_GET['want-symbol']))) {
        // lettere numeri
        $new_array = array_merge($lower_case_array, $upper_case_array, $number_array);
    }
    if (isset($_GET['want-letter']) && !(isset($_GET['want-number'])) && isset($_GET['want-symbol'])) {
        // lettere e simboli
        $new_array = array_merge($lower_case_array, $upper_case_array, $symbol_array);
    }
    if (!(isset($_GET['want-letter'])) && isset($_GET['want-number']) && isset($_GET['want-symbol'])) {
        // numeri e simboli
        $new_array = array_merge($number_array, $symbol_array);
    }
    if (!(isset($_GET['want-letter'])) && !(isset($_GET['want-number'])) && !(isset($_GET['want-symbol']))) {
        // caso tutte selezioni
        $new_array = array_merge($lower_case_array, $upper_case_array, $number_array, $symbol_array);
    }
    // genero l'array completo di elementi  

    // gestiamo la ripetizione di caratteri
    for ($i = 0; $i < $length; $i++) {

        $random_index = rand(0, (count($new_array) - 1));

        if ($want_repeat === "true" || !(str_contains($_SESSION['password'], $new_array[$random_index]))) {
            $_SESSION['password'] = $_SESSION['password'] . $new_array[$random_index];
        }
    }

    header("Location: pages/password.php");
}
