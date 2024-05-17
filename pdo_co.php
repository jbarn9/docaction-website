<?php
try {
    $dbco = new PDO("mysql:host=localhost;dbname=docaction","root","root");
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    echo "Le code de l'exception est : " . $e->getMessage();
}