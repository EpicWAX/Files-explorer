<?php
    include ('C:\wamp64\www\bonjour\Files-explorer\ctrl.php');

    if(isset($_GET['dossier']))
        $adresse = $_GET['dossier'];   
    else
        $adresse=".";

    if(isset($_GET['fichier']))
    {
        $f = $_GET['fichier'];
        $extension = strrchr($f,".");   
        if (fn::isimage(strtolower($extension)))
            echo "<img src='$f' alt='$f'><br>";
        else
            fn::fileread($f);
    }
    else
    {    
        fn::printARpath($adresse);
        echo "<br>";
        echo '<fieldset><legend>Liste des fichiers :</leg;end><br>'; 
        fn::printfile($adresse);
    }
?>