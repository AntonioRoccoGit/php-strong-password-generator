<?php
session_start();

if (isset($_GET['password-length'])) {
    $length = $_GET['password-length'];

    // genero l'array completo di elementi  
    $new_array = array_merge($lower_case_array, $upper_case_array, $number_array, $symbol_array);

    for ($i = 0; $i < $length; $i++) {

        $random_index = rand(0, (count($new_array) - 1));
        $user_password = $user_password . $new_array[$random_index];
    }
    $_SESSION['password'] = $user_password;
    header("Location: pages/password.php");
}
