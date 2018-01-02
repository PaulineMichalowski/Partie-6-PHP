<html>
    <head>
        <title>Exercice 4</title>
    </head>
    <body>
        <?php
        //recupération du langage et affichage du serveur
        if (!empty($_GET['langage']) && !empty($_GET['serveur'])) {
            echo 'Bonjour ' . $_GET['langage'] . ' ' . $_GET['serveur'] . ' !';
        } else {
            //affichage d'un message d'erreur
            echo ' Problème !';
        }
        ?>
    </body>
</html>
