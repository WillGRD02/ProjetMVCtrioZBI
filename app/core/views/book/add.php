<?php 
    $pageTitle = "Ajout d'un livre";
    // require_once('./app/core/views/header.php'); 
?>

<h1>Ajout d'un livre à notre bibliothèque&nbsp;:</h1>

<form method="POST" action="index.php?controller=book&action=add">
    <div>    
        <input type="text" name="titre" placeholder="Nom de votre livre">
    </div>
    <div>
        <textarea name="description" placeholder="Courte description de votre livre"></textarea>
    </div>
    <div>
        <input type="number" name="prix" placeholder="Prix du livre">
    </div>
    <input type="submit" value="Envoyer">
</form>

<!-- <?php require_once('./app/core/views/footer.php'); ?> -->