<?php

function all() {
    require_once('./app/core/models/userModel.php');
    $results = findAll();
    require_once('./app/core/views/user/all.php');
}

function updateOne() {
    require_once('./app/core/models/userModel.php');
    // On pourrait ici procéder à davantagde de contrôle sur les données
    // provenant du formulaire situé sur la vue book/update. 
    update(htmlentities($_POST['prenom']), htmlentities($_POST['nom']), htmlentities($_POST['email']), htmlentities($_POST['password']), htmlentities($_POST['role']), htmlentities($_POST['userID']));
}

function showUpdateForm() {
    require_once('./app/core/models/userModel.php');
    $user = findBy($_POST['updateID']);
    require_once('./app/core/views/user/update.php');
}

function delete() {
require_once('./app/core/models/userModel.php');
deleteBy($_POST["deleteID"]);
}

function add() {
require_once('./app/core/models/userModel.php');
var_dump($_POST);
$nom = htmlentities($_POST["nom"]);
$prenom = htmlentities($_POST["prenom"]);
$email = $_POST["email"];
$mdp = $_POST["password"];
$role = $_POST['role'];
addOne($nom, $prenom, $email, $mdp, $role);
}

function showAddForm() {
require_once ('./app/core/views/user/add.php');
}

function userConnection() {
    require_once ('./app/core/models/userModel.php');
    $email = $_POST["email"];
    $mdp = $_POST["mdp"];
    $connexionVerif = conn($email, $mdp);

    if($connexionVerif['0'] === 1){
        
        session_start();
        $_SESSION["connected"] = TRUE;
        $_SESSION['prenom'] = $connexionVerif['1']['prenom'];
        $_SESSION['nom'] = $connexionVerif['1']['nom'];
        $_SESSION['email'] = $connexionVerif['1']['email'];
        $_SESSION['role'] = $connexionVerif['1']['role'];
        $_SESSION['id'] = $connexionVerif['1']['id'];

            header('Location: index.php?controller=book&action=all');
 
    }else{
        // La connexion a échoué, vous pouvez gérer cela ici (par exemple, afficher un message d'erreur).
    }
}

function showConnForm(){
    require_once ('./app/core/views/user/connexion.php');
    
}

function deconnexion(){
    // session_start();
    session_unset();
    session_destroy();
    header("Location: index.php?controller=".$_GET['controller']."&action=all");

}