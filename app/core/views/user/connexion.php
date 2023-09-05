<?php 
    $pageTitle = "Connexion utilisateur";
?>

<h1>Connexion utilisateur&nbsp;:</h1>

<form method="POST" action="index.php?controller=user&action=conn">
    <input type="email" name="email" placeholder="Nom d'utilisateur">
    <input type="password" name="password" placeholder="Nom d'utilisateur">
    <input type="submit" value="Envoyer">
</form>