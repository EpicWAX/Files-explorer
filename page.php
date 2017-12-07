<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Files-explorer</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header class="container">
            <div class="row">
            <div class="col-2"><img src="logo.png" alt=""></div>
                <div class="col-10 ml-auto mr-auto"><h1>Projet Files Explorer fait au sein de l'Access Code School</h1></div>
            </div>
        </header>
        <section id="main" class="container">
            <div  id="mainrow" class="row">
                <div id="ariane" class="">

                </div>
                <div id="dossier" class="col-12">                  
                    <h2>Dossier/Fichier</h2>
                    <div id="retour">
                        <img src="back.gif" alt="precedent" id="precedent" onclick="precedent()">
                        <img src="suiv.gif" alt="suivant" id="suivant" onclick="suivant()">
                    </div>
                    <?php include("voir_fichiers.php")?>
                </div>
            </div>
        </section>

        <script>
            function suivant() {
                window.history.go(+1);
            }

            function precedent() {
                window.history.go(-1);
            }
        </script>
    </body>
</html>