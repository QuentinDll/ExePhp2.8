<?php
// demarage session
session_start();
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
        <?php if (!empty($_SESSION['firstname'])) { ?>
            <?= $_SESSION['firstname'] ?>
        <?php } ?>

        <?php if (!empty($_SESSION['lastname'])) { ?>
            <?= $_SESSION['lastname']; ?>
        <?php } ?>

        <?php if (!empty($_SESSION['firstname'])) { ?>
            <p><?= $_SESSION['age']; ?></p>
        <?php } ?>
        <p><a href="index.php">Index Page</a></p>
    </body>
</html>
