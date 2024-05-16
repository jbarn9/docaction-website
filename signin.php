<?php
if(!empty($_POST["name"] && $_POST["email"] && $_POST["password"]) && isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"])){
    $dbco = new PDO("mysql:host=localhost;dbname=docaction","root","root");
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    //On insère les données reçues
    $sth = $dbco->prepare("
    INSERT INTO user(name, email, password)
    VALUES(:name, :email, :password)");
    $sth->bindParam(':name',$name);
    $sth->bindParam(':email',$email);
    $sth->bindParam(':password',password_hash($password, PASSWORD_BCRYPT));
    $sth->execute();
        
    //On renvoie l'utilisateur vers la page de remerciement
    header("Location:profile.html");
}else {
    echo 'error';
}