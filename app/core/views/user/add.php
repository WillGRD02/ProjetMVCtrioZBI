<?php 
    $pageTitle = "Ajout d'un utilisateur";
?>

<h1>Ajout d'un utilisateur&nbsp;:</h1>

<form method="POST" action="index.php?controller=user&action=add">
    <div>
        <input type="text" name="prenom" placeholder="prenom">
    </div>
    <div>
        <input type="text" name="nom" placeholder="nom">
    </div>
    <div>
        <input type="email" name="email" placeholder="email">
    </div>
    <div>
        <input type="password" name="password" placeholder="mot de passe">
    </div>
    <div>
        <select name="role">  
            <option value="0">utilisateur</option>
            <option value="1">Administrateur</option>
        </select>
    </div>
        
    <input type="submit" value="Envoyer">
</form>