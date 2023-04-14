<?php
include('config.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = $bdd->prepare('SELECT * FROM films WHERE id = :id');
    $query->execute(array('id' => $id));
    $film = $query->fetch();
    if (!$film) {
        // Si aucun films n'a été trouvé avec l'ID donné, afficher un message d'erreur
        echo "Aucun films trouvé avec cet ID.";
        exit();
    }
} else {
    // Si l'ID n'est pas défini dans l'URL, rediriger vers la page d'accueil
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>films</title>
</head>

<body>

    <h1><?php echo $film['nom']; ?></h1>
    <div id="f">
        <img src="" alt="" id="image">

    </div>

</body>
<script src="./script.js"></script>

</html>