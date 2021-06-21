<?php
require_once "User.php";
require_once "DAO.php";

if(isset($_POST['submit'])){
    echo 'test1';
    $firstname = $_POST['nameUser'];
    $lastname = $_POST['prenomUser'];
    $email = $_POST['mailUser'];
    $mdp = $_POST['passwordUser'];
    
    if (isset($_FILES['pictureUser']) && $_FILES['pictureUser']['error'] == 0) {
        echo "c'est bon";
    }
    
    $target_dir = './uploads/';
    
   
    $informationsImage = pathinfo($_FILES['pictureUser']['name']);
   
    $extensionImage = strtolower($informationsImage['extension']);
    
    $target_file = $target_dir .  $lastname . "." .$extensionImage;
    echo $target_file;
    

    if (move_uploaded_file($_FILES['pictureUser']['tmp_name'], $target_file)) {
        echo "The file ". basename( $_FILES["pictureUser"]["name"]). " has been uploaded.";
    } else {

        echo "Sorry, there was an error uploading your file.";
    }

    $user1 = new User();

    $user1->setFirstName($firstname);
    $user1->setLastName($lastname);
    $user1->setEmail($email);
    $user1->setPassword($mdp);
    $user1->setPicture($target_file);

    echo $user1->getFirstName();

    $user1->envoisDonnees($dsn, $user, $password);



}
?>