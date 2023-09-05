<?php
    $pageTitle = "Modification d'un utilisateur";
?>

<h1>Modification de l'utilisateur <?= $user["prenom"].' '.$user["nom"] ?>&nbsp;:</h1>

<form action="index.php?controller=user&action=updateOne" method="POST">
    <input type="text" name="prenom" placeholder="Prénom de l'utilisateur" value="<?= $user["prenom"] ?>">

    <input type="text" name="nom" placeholder="Nom de l'utilisateur" value="<?= $user["nom"] ?>">

    <input type="text" name="email" placeholder="email de l'utilisateur" value="<?= $user["email"] ?>">

    <input type="text" name="password" placeholder="mot de passe de l'utilisateur" value="<?= $user["mdp"] ?>">

    <input type="text" name="role" placeholder="role de l'utilisateur" value="<?= $user["role"] ?>">

    <input type="hidden" value="<?= $user["id"]; ?>" name="userID">

    <input type="submit" value="Envoyer" name="submitted">
</form>