<?php
$pageTitle = "Listes des utilisateurs";
?>

<h1>Listes des utilisateurs&nbsp;:</h1>

<table>
    <thead>
        <th>Nom</th>
        <th>Prénom</th>
        <th>email</th>
        <th>roles</th>
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
        <?php foreach ($results as $user) { ?>
            <tr>
                <td><?= $user["nom"]; ?></td>
                <td><?= $user["prenom"]; ?></td>
                <td><?= $user["email"]; ?></td>
                <td><?= $user["role"]; ?></td>
                <?php
                if (isset($_SESSION) && isset($_SESSION["connected"]) === TRUE) {
                ?>
                    <td>
                        <form method="POST" action="index.php?controller=user&action=showUpdateForm">
                            <input type="hidden" value="<?= $user["id"]; ?>" name="updateID">
                            <input type="submit" value="📝">
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="index.php?controller=user&action=delete">
                            <input type="hidden" value="<?= $user["id"]; ?>" name="deleteID">
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

<a class="userListLink" href="index.php?controller=book&action=all">Voir tout les livres</a>


<!-- 
        Le chemin du lien ci dessous n'est plus valide (puisque l'on se
        base sur l'index) : à vous de le mettre à jour en prenant en compte
        le controlleur et l'action adéquate.
    -->