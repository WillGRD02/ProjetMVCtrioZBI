<?php 
    $pageTitle = "Ajout d'un utilisateur";
?>

<h1>Ajout d'un utilisateur&nbsp;:</h1>

<form method="POST" action="index.php?controller=user&action=add">
    <input type="text" name="prenom" placeholder="Nom d'utilisateur">
    <input type="text" name="nom" placeholder="Nom d'utilisateur">
    <input type="email" name="email" placeholder="Nom d'utilisateur">
    <input type="password" name="password" placeholder="Nom d'utilisateur">
    <select name="role">  
        <option value="visitor">utilisateur</option>
        <option value="admin">Administrateur</option>
    </select>
    <input type="submit" value="Envoyer">
</form>