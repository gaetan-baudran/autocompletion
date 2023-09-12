<?php
include('./include/config.php');
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
    <title>film <?php echo $film['nom']; ?></title>
    <link rel="stylesheet" href="./style/element .css">
</head>

<body>

    <a href="index.php">Accueil</a>

    <div class="container">
       <img src="asset/<?php echo $film['nom']; ?>.jpg" alt="<?php echo $film['nom']; ?>">
    </div>


</body>
<script src="./script.js"></script>

</html>