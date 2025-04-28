<?php
    session_start();
    require_once('controleur/controleur.php');
    $unControleur = new Controleur();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Web PHP</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div id="content">
        <h1>Système pour gestion les notes des eleves</h1>
        <?php
            require_once("controleur/verif_connexion.php");

            if(isset($_SESSION['email'])) {
                echo '
                       <div id="navbar">
                            <a href="index.php?page=1"> Accueil </a>
                            <a href="index.php?page=2"> Liste Eleve </a>
                            <a href="index.php?page=3"> Gestion </a>
                            <a href="index.php?page=4"> Deconnexion </a>
                       </div>
                     ';

                $page = $_GET['page'] ?? 1;

                switch($page) {
                    case 1: require_once('controleur/page_accueil.php'); break;
                    case 2: require_once('controleur/show_liste_eleve.php'); break;
                    case 3: require_once('controleur/insert_eleve.php'); break;
                    case 4: session_destroy(); unset($_SESSION['email']);
                            header('Location: index.php'); break;
                }
            }
        ?>
    </div>
</body>
</html>