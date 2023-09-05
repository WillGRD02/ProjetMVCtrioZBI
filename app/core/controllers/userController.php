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
    update(htmlentities($_POST['nom']), htmlentities($_POST['prenom']), $_POST['email'], $_POST['mdp'], $_POST['role'], $_POST['id']);
}

function showUpdateForm() {
    require_once('./app/core/models/userModel.php');
    $book = findBy($_POST['updateID']);
    require_once('./app/core/views/user/update.php');
}

function delete() {
require_once('./app/core/models/userModel.php');
deleteBy($_POST["deleteID"]);
}

function add() {
require_once('./app/core/models/userModel.php');
$nom = htmlentities($_POST["nom"]);
$prenom = htmlentities($_POST["prenom"]);
$email = $_POST["email"];
$mdp = $_POST["mdp"];
addOne($nom, $prenom, $email, $mdp);
}

function showAddForm() {
require_once ('./app/core/views/user/add.php');
}

function userConnection($emil, $mdp) {
        require_once ('.app/core/models/userModel.php');
        $email = $_POST["email"];
        $mdp = $_POST["mdp"];
    conn($email, $mdp);
}
