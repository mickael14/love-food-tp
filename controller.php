<?php 

require_once "Resto.php";
require_once "DAO.php";

if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $address = $_POST['address'];
    $picture = $_POST['picture'];
    $type = $_POST['type'];
    $description = $_POST['description'];

    $resto = new Resto();

    $resto->envoisDonnees($dsn,$user,$password);



}