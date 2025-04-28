<?php
    $Eleve = null;

    if(isset($_GET['action']) && isset($_GET['id_eleve'])){
        if($_GET['action'] == 'edit'){
            $Eleve = $unControleur->select_Eleve($_GET['id_eleve']);
        }
    }

    require_once("vue/page_gestion_eleve.php");

    if(isset($_POST["Valider"])){
        $unControleur->insert_Eleve($_POST);
        echo "<br> Bien enregistré nouvelle eleve !! ";
    }

    if(isset($_POST["Modifier"])){
        $unControleur->update_Eleve($_POST);
        echo "<br> Bien modifié eleve !! ";
    }
?>