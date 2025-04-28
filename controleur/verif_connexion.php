<?php
    if (!isset($_SESSION['email'])) {
        require_once('vue/page_connexion.php');
    }

    if(isset($_POST['Connexion'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $unUser = $unControleur->verif_Connexion($email, $pass);
        if($unUser) {
            $_SESSION['nom'] = $unUser['nom'];
            $_SESSION['prenom'] = $unUser['prenom'];
            $_SESSION['email'] = $unUser['email'];
            $_SESSION['pass'] = $unUser['pass'];
            header('Location: index.php?page=1');
        } else {
            echo "<p style='color:red;'>Email ou mot de passe incorrect</p>";
        }
    }
?>