<?php
class fn 
{
	public static function fileread($f)
	{
		$file = new SplFileObject("$f");
    	fn::printARpath($f);
    	echo "</br>";
    	$ff = NULL;
    	$n = 0;
        while (!$file->eof())
        {
            $ff = $ff.$file->key()."|    ";
        	$ff = $ff.$file->current()."</br>";
        	$n += strlen($file->current());
            $file->next();
		}
		echo "</br>Nom du fichier: ";
		$tab = explode("/", strrchr($f, '/'));
		echo $tab[1];
		echo "</br>Nbr de charactere lu: ".$n;
		echo "</br></br>".$ff;
	}

	public static function printARpath($adresse)
	{
		$tab = explode("/", $adresse);
	    $i = -1;
    	$road = NULL;
	    while ($tab && isset($tab[++$i]))
	    {
        	if ($road)
        	{
        	    $road = $road.'/'.$tab[$i];
        	    echo "<a class='trucvegan' href='page.php?dossier=$road'.".$tab[0].">".$tab[$i]."</a>"."<a class='trucvegan'>/</a>";
        	    continue ;
        	}
            $road = $tab[$i];
            echo "<a class='trucvegan' href='page.php?dossier=$road'.".$tab[0].">".$tab[$i]."</a>"."<a class='trucvegan'>/</a>";
        }
	}

	public static function isimage($ext)
	{
		return (($ext == ".png" || $ext == ".jpg" || $ext == ".gif") ? 1 : 0);
	}
	
	public static function printfile($adresse)
	{
    	$dossier = opendir($adresse);
	    while ($fichier = readdir($dossier))
        	if ($fichier != "." && $fichier != "..") 
            	if (is_dir($adresse.'/'.$fichier))
                	echo '<img src="icone fichier.png" alt="icone document"><a href="page.php?dossier='.$adresse.'/'.$fichier.'"> - '.$fichier.'</a><br>';
            	else
                	echo ((fn::isimage(strtolower(strchr($fichier, ".")))) ? '<img src="image2.gif" alt="icone image"><a href="page.php?fichier='.$adresse.'/'.$fichier.'"> - '.$fichier.'</a><br>' : '<img src="text.gif" alt="icone texte"><a href="page.php?fichier='.$adresse.'/'.$fichier.'"> - '.$fichier.'</a><br>');
    	closedir($dossier);
    }

}
?>
