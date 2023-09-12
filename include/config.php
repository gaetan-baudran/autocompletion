<?php
session_start();
$servername = 'localhost:3306';
$username = 'gaetan_auto';
$password = 'ash83400974';

try {
    $bdd = new PDO("mysql:host=$servername;dbname=gaetan-baudran_autocompletion;charset=utf8", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo 'Connexion réussie';
} catch (PDOException $e) {
    // echo "Erreur : " . $e->getMessage();
}
