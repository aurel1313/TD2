<?php
    require_once('Model.php');
    echo "connexion reussie";
    try{
        new PDO("mysql:host=localhost;dbname=".$_SESSION['database'],$_SESSION['login'],$_SESSION['password']);
        
    }catch(PDOExeption $e){
        echo $e->getMessage();
        die();
    }

?>