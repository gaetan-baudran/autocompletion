<?php
include('config.php');

if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $query = $bdd->prepare('SELECT * FROM films WHERE nom LIKE :search ');
    $query->execute(array('search' =>   $search . '%'));
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($result);
    echo $json;
}
if (isset($_GET['search2'])) {
    $search2 = $_GET['search2'];
    $query = $bdd->prepare('SELECT * FROM films WHERE nom LIKE :search2 ');
    $query->execute(array('search2' => '%' . $search2 . '%'));
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($result);
    echo $json;
}

if (isset($_GET['id'])) {
    $req = $bdd->prepare("SELECT * FROM `films` WHERE `id` = ? ");
    $req->execute([$_GET['id']]);
    $result = $req->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($result);
    echo $json;
}
