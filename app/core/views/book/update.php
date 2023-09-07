<?php
    $pageTitle = "Modification d'un livre";
?>

<h1>Modification du livre intitulé <?= $book["name"] ?>&nbsp;:</h1>

<form action="index.php?controller=book&action=updateOne" method="POST">
    
    <div>
        <label for="titre">Titre :</label>
        <input type="text" id="titre" name="titre" placeholder="Nom de votre livre" value="<?= $book["name"] ?>">
    </div>

    <div>
        <label for="desc">Description :</label>
        <textarea name="description" id="desc" placeholder="Courte description de votre livre"><?= $book["description"] ?></textarea>
    </div>

    <div>
        <label for="prix">Prix :</label>
        <input type="number" name="prix" id="prix" placeholder="Prix du livre" value="<?= $book["price"] ?>">
    </div>

    <input type="hidden" value="<?= $book["id"]; ?>" name="bookID">

    <input type="submit" id="submit" value="Envoyer" name="submitted">
</form>