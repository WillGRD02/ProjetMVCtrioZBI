<?php 
    $pageTitle = "Connexion utilisateur";
?>

<h1>Connexion utilisateur&nbsp;:</h1>

<form method="POST" action="index.php?controller=user&action=userConnection">
    <input type="email" name="email" placeholder="email">
    <input type="password" name="mdp" placeholder="mot de passe">
    <input type="submit" value="Envoyer">
</form>