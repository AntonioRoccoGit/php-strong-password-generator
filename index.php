<?php
include_once __DIR__ . "/partials/data.php";

include_once __DIR__ . "/partials/functions.php";


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

                <!-- HANDLE REPETITION -->
                <div class="row mb-3 p-2 ms_row">
                    <div class="col-8">
                        <span class="col-form-label">Consenti ripetizioni di uno o più caratteri</span>
                    </div>
                    <div class="col-4">
                        <div class="form-check">
                            <input class="form-check-input" checked type="radio" value="true" name="want-repeat" id="want-repeat1">
                            <label class="form-check-label" for="want-repeat1">
                                Si
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="false" name="want-repeat" id="want-repeat2">
                            <label class="form-check-label" for="is-uppercase2">
                                No
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /HANDLE REPETITION -->

                <!-- HANDLE CHARACTERS -->
                <div class="row mb-3 p-2 ms_row">
                    <div class="col-8">
                        <!-- layaout -->
                    </div>
                    <div class="col-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="true" name="want-letter" id="want-letter" checked>
                            <label class="form-check-label" for="flexCheckDefault">
                                Lettere
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="want-number" id="want-number" checked>
                            <label class="form-check-label" for="want-number">
                                Numeri
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="want-symbol" id="want-symbol" checked>
                            <label class="form-check-label" for="want-symbol">
                                Simboli
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /HANDLE CHARACTERS -->

            </div>

            <button type="submit" class="btn btn-success">Genera password</button>
        </form>
    </div>
</body>
<?php
?>

</html>