<?php
// demarage session
session_start();
// creation des super global et des tableaux
$_SESSION['firstname'] = 'Jake';
$_SESSION['lastname'] = 'Hill';
$_SESSION['age'] = 21;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 2</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <a href="http://exephpp8">Acceuile</a>
            <h1>Exercice 2</h1>
        </nav>
        <p><a href="login.php">Login Page</a></p>
    </body>
</html>
