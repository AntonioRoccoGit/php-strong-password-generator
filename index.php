<?php
$lower_case_array = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
$upper_case_array = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
$number_array = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
$symbol_array = ['@', '#', '/', '*', '?', '&', '$', '!', '^', '+', ':', ';', '<', '>', '%'];

$user_password = "";

if (isset($_GET['password-length'])) {
    $length = $_GET['password-length'];

    // genero l'array completo di elementi  
    $new_array = array_merge($lower_case_array, $upper_case_array, $number_array, $symbol_array);

    for ($i = 0; $i < $length; $i++) {

        $random_index = rand(0, (count($new_array) - 1));
        $user_password = $user_password . $new_array[$random_index];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- LINK BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- MY STYLE -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container mt-4 pt-2">
        <div class="header">
            <h1>Strong Password Generator</h1>
            <h2>Genera una password sicura</h2>
        </div>

        <form class="ms_form" action="index.php" method="GET">

            <div class="container">

                <!-- HANDLE PASSWORD LENGTH -->
                <div class="row mb-3 p-2 ms_row">
                    <div class="col-8">
                        <label for="password-length" class="col-form-label">Lunghezza password</label>
                    </div>
                    <div class="col-4">
                        <input class="p-1 form-control" type="number" name="password-length" id="password-length" placeholder="1-10">
                    </div>
                </div>
                <!-- /HANDLE PASSWORD LENGTH -->

            </div>

            <button type="submit" class="btn btn-success">Genera password</button>
        </form>
        <h2 class="user-password">La tua super password è:<br><?php echo $user_password ?></h2>
    </div>
</body>

</html>