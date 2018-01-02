<html>
    <head>
        <title>Exercice 6</title>
    </head>
    <body>
        <?php
        //recupération des informations
        if (isset($_GET['batiment']) && isset($_GET['salle'])) {
            //affichage des informations avec context 
            echo 'Bonjour ' . $_GET['batiment'] . ' ' . $_GET['salle'] . ' !';
        } else {
            // affichage d'un message d'erreur
            echo ' Problème !';
        }
        ?>
    </body>
</html>
