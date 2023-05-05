<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- MY STYLE CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h2 class="user-password">La tua super password è:<br><?php echo $_SESSION["password"] ?></h2>

</body>

</html>
<?php
unset($_SESSION['password']);
?>