<html>
    <head>
        <title>Exercice 5</title>
    </head>
    <body>
        <?php
        //recupérétion du jour de la semaine
        if (isset($_GET['semaine'])) {
            // affichage avec une phrase 
            echo 'Bonjour ' . $_GET['semaine'] . ' !';
        } else {
            // affichage d'un message d'erreur en cas de probleme
            echo ' Problème !';
        }
        ?>
    </body>
</html>
