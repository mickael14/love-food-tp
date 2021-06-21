<?php
session_start();
$status = session_status(); 
require_once "User.php";
require_once "DAO.php";

$_SESSION['test']= true;

if(isset($_POST['submit'])){
    
    $email = $_POST['mailUser'];
    $mdp = $_POST['passwordUser'];
 
    $user1 = new User();

    $user1->setEmail($email);
    $user1->setPassword($mdp);
    
    $logs = [$user1->getEmail(), $user1->getPassword()];

    $user1->login($dsn, $user, $password, $logs);
}
