<?php 
    $pageTitle = "Ajout d'un utilisateur";
?>

<h1>Ajout d'un utilisateur&nbsp;:</h1>

<form method="POST" action="index.php?controller=user&action=add">
    <input type="text" name="prenom" placeholder="prenom">
    <input type="text" name="nom" placeholder="nom">
    <input type="email" name="email" placeholder="email">
    <input type="password" name="password" placeholder="mot de passe">
    <select name="role">  
        <option value="0">utilisateur</option>
        <option value="1">Administrateur</option>
    </select>
    <input type="submit" value="Envoyer">
</form>