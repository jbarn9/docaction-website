<?php
if($_SERVER['REQUEST_METHOD']=='POST' && !empty($_POST["name"] && $_POST["email"] && $_POST["password"]) && isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"]))
{
    include "Dbconnect.php";
    $dbconnect = new Dbconnect;
    $co = $dbconnect->connect();

    $email = $_POST['email'];
    $password = $_POST['password'];
    $name = $_POST['name'];
   
    $sql = "INSERT INTO user(email, password, name) VALUES(:email, :password, :name)";
    //On insère les données reçues
    $stmt = $co->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', password_hash($password, PASSWORD_BCRYPT));
    $stmt->bindParam(':name', $name);
    $stmt->execute(); 
        
    //On renvoie l'utilisateur vers la page de profil
    header("Location:profile.php?name=$name");

}