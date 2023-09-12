<?php
include('./include/config.php');

if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $query = $bdd->prepare('SELECT * FROM films WHERE nom LIKE :search ');
    $query->execute(array('search' => '%' . $search . '%'));
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $uniqueResult = array_unique($result, SORT_REGULAR); 
    $json = json_encode($uniqueResult);
    echo $json;
}


if (isset($_GET['id'])) {
    $req = $bdd->prepare("SELECT * FROM `films` WHERE `id` = ? ");
    $req->execute([$_GET['id']]);
    $result = $req->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($result);
    echo $json;
}
?>
