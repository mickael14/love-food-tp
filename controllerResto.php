<?php

require_once 'Resto.php';
require_once 'DAO.php';
require_once 'controllerLogin.php';
$_SESSION['AllResto'];
if(isset($_GET["liste"])){

$rest = new Resto();

$_SESSION['AllResto'] = $rest->recupDonnees($dsn,$user,$password);
header("Location: listResto.php");
}
if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $address = $_POST['address'];
    $picture = $_POST['picture'];
    $type = $_POST['type'];
    $description = $_POST['description'];

    $resto = new Resto();
    $resto->setName($name);
    $resto->setAddress($address);
    $resto->setPicture($picture);
    $resto->setType($type);
    $resto->setDescription($description);
    

    $resto->envoisDonnees($dsn,$user,$password);



}


?>