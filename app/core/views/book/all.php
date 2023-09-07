<?php
$pageTitle = "Notre bibliothèque";
?>

<h1>Les ouvrages de notre bibliothèque&nbsp;:</h1>


<table>
    <thead>
        <th>Titre</th>
        <th>Description</th>
        <th>Prix</th>
        <?php
        if (isset($_SESSION) && isset($_SESSION["connected"]) === TRUE) {
        ?>
            <th>Modifier</th>
            <th>Supprimer</th>
        <?php
        }
        ?>
    </thead>
    <tbody>
        <?php foreach ($results as $book) { ?>
            <tr>
                <td><?= $book["name"]; ?></td>
                <td><?= $book["description"]; ?></td>
                <td><?= $book["price"]; ?></td>
                <?php
                if (isset($_SESSION) && isset($_SESSION["connected"]) === TRUE) {
                ?>
                    <td>
                        <form method="POST" action="index.php?controller=book&action=showUpdateForm">
                            <input type="hidden" value="<?= $book["id"]; ?>" name="updateID">
                            <input type="submit" value="📝">
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="index.php?controller=book&action=delete">
                            <input type="hidden" value="<?= $book["id"]; ?>" name="deleteID">
                            <input type="submit" value="🗑️">
                        </form>
                    </td>
                <?php
                }
                ?>
            </tr>
        <?php } ?>
    </tbody>
</table>

<a class="userListLink" href="index.php?controller=user&action=all">Voir tout les utilisateurs</a>


<!-- 
        Le chemin du lien ci dessous n'est plus valide (puisque l'on se
        base sur l'index) : à vous de le mettre à jour en prenant en compte
        le controlleur et l'action adéquate.
    -->
<?php
if (isset($_SESSION) && isset($_SESSION["connected"]) === TRUE) {
?>
    <p><a href="index.php?controller=book&action=showAddForm" title="Ajouter un livre à notre bibliotheque">Ajouter un livre</a></p>

<?php
}
?>