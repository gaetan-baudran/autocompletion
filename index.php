<!DOCTYPE html>
<html>

<head>
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="./style/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    <div class="search-container">
        <h1>Trouvez Votre Film</h1>
        <form action="recherche.php" method="GET">
            <input type="text" id="search-bar" name="search" placeholder="Rechercher...">
            <div id="result"></div>
            <hr class="my-4">
            <!-- <div id="result2"></div> -->
        </form>
    </div>
</body>
<script src="./script.js"></script>

</html>