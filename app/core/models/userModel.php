<?php 
function findAll(){
    require_once('dbConnect.php');

    if($pdoConn){
        $query = "SELECT * FROM users";

        $exec = $pdoConn->query($query);

        if($exec){
            $results = $exec->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    return $results;
}


function findBy($id){
    require_once('dbConnect.php');

    if($pdoConn){

        $query = "SELECT * FROM users WHERE id=$id";

        $exec = $pdoConn->query($query);

        if($exec){
            $user = $exec->fetch(PDO::FETCH_ASSOC);

        }
        else{
            // header('Location: ../error.php')
            echo "Erreur";
        }
    }
    return $user;
}

function update($prenom, $nom, $email, $password, $role, $userID){
    require_once('dbConnect.php');

    if($pdoConn){
        $query = "UPDATE users SET nom='$nom', prenom='$prenom', email='$email', mdp='$password', role='$role', id='$userID'";

        $exec = $pdoConn->query($query);

        if($exec){
            header('Location: index.php?controller=user&action=all');
        }
        else{
            // header('Location: ../error.php')
            echo "Erreur";
        }
    }
}

function deleteBy($id){

    require_once('dbConnect.php');

    // Contrôle de l'état de la connexion à la base de données
    if($pdoConn){

    
        // Stockage de la requête SQL au sein de la variable $query.
        $query = "DELETE FROM users WHERE id=$id";
        
        // Execution de la requête sur la base de données.
        // Stockage du résultat de l'exécution dans la variable $execution.
        $exec = $pdoConn->query($query);

        if($exec){
            // Si la requête de suppression s'est exécutée sans accrocs :
            // Redirection vers la page sur laquelle figurent l'ensemble des livres
            header('Location: index.php?controller=user&action=all');
        }
        // Si la requête a rencontré une erreur lors de son execution
        else{
            header('Location: ../error.php');
        }
    } // Fin du contrôle de la connexion à PDO

    else{
        header('Location: ../error.php');
    }
}

function addOne($nom, $prenom, $email, $password, $role){
    // Récupération de la connexion à la base de données
    require_once("dbConnect.php");

    // Si la connexion à la base de données est effective
    if($pdoConn){
        // Stockage de la requête d'ajout au sein de la variable $query.
        $query = "INSERT INTO users (nom, prenom, email, mdp, role) VALUES ('$nom', '$prenom', '$email' ,'$password' ,'$role')";

        // Execution de la requête sur la base de données.
        // Stockage du résultat de l'exécution dans la variable $execution.
        $exec = $pdoConn->query($query);

        if($exec){
            // Si la requête s'est exécutée sans accrocs :
            // Redirection vers la page qui affiche l'ensemble des livres
            header('Location: index.php?controller=user&action=all');
        }
    }
}

function conn($userN, $userMdp){

    require_once('dbConnect.php'); 
    $connection = $database->prepare("SELECT * FROM users WHERE nom = :nom AND mdp = :password"); //On prépare la requete
    $connection->bindParam(':nom', $userN);   //On ajoute les paramétres à la requete
    $connection->bindParam(':password', $userMdp);    //On ajoute les paramétres à la requete

    $connection->execute();    //On execute la requete
    $isConnected = $connection->rowCount();    //On compte les lignes de la requete
}
