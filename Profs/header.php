<?php 
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profs</title>
    <link rel="stylesheet" href="./style.css" type="text/css">
</head>
<body>
    <nav>
        <ul>
            <a href="index.php"><li>Accueil</li></a>
            <?php if(!isset($_SESSION['usersId'])) : ?>
                <a href="signup.php"><li>S'inscrire</li></a>
                <a href="login.php"><li>Se connecter</li></a>
            <?php else: ?>
                <a href="./controllers/Users.php?q=logout"><li>Deconnexion</li></a>
            <?php endif; ?>
        </ul>
    </nav>