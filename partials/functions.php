<?php
session_start();

if (isset($_GET['password-length'])) {
    $length = $_GET['password-length'];
    $want_repeat = $_GET['want-repeat'];
    $new_array = [];

    if (isset($_GET['want-letter'])) {
        $new_array = array_merge($lower_case_array, $upper_case_array);
    }

    if (isset($_GET['want-number'])) {
        $new_array = array_merge($new_array, $number_array);
    }

    if (isset($_GET['want-symbol'])) {
        $new_array = array_merge($new_array, $symbol_array);
    }

    // gestiamo la ripetizione di caratteri

    // todo refactor for in while 
    for ($i = 0; $i < $length; $i++) {

        $random_index = rand(0, (count($new_array) - 1));

        if ($want_repeat === "true" || !(str_contains($_SESSION['password'], $new_array[$random_index]))) {
            $_SESSION['password'] = $_SESSION['password'] . $new_array[$random_index];
        }
    }

    header("Location: pages/password.php");
}
