<?php 

if(isset($_GET['dossier'])) {
    $adresse = $_GET['dossier'];   
}
else {
    $adresse=".";
}

$n = -2;
echo 'Dossier : '.$adresse;

$dossier = opendir($adresse); //Ouverture du dossier. 
echo '<fieldset><legend>Liste des fichiers :</legend><br>'; 
while ($fichier = readdir($dossier)) //On affiche les fichiers les uns après les autres.
{
    $n++;
    if ($fichier != "." && $fichier != "..") 
    {
        if (is_dir ($adresse.'/'.$fichier)) {

            echo '<a href="page.php?dossier='.$adresse.'/'.$fichier.'">'.$n.' - '.$fichier.'</a><br>';
            
        } else { 
            
            echo '<a href='.$adresse.'/'.$fichier.'>'.$n.' - '.$fichier.'</a><br>';
        
        }
    }
}
closedir($dossier);


?>