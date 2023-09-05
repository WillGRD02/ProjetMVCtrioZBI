<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./app/public/css/style.css">
    <title><?= $pageTitle; ?></title>
</head>

<body>
    <main>
        <header>
            <nav>
                <menu>
                    <?php
                    if (isset($_SESSION)) {
                    ?>

                        <li><a href=""><?= $_SESSION['prenom'].' '.$_SESSION['nom'] ?></a></li>

                    <?php
                    } else {
                    ?>
                        <li><a href="index.php?controller=user&action=showAddForm">Inscription</a></li>
                        <li><a href="index.php?controller=user&action=showConnForm">Connexion</a></li>
                    <?php

                    }
                    ?>
                </menu>
            </nav>
        </header>