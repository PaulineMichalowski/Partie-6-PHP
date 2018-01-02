<html>
    <head>
        <title>Exercice 1</title>
    </head>
    <body>
        <?php
        //recuperation des données
        if (isset($_GET['nom']) && isset($_GET['prenom'])) {
            //affichage des données avec GET et echo
            echo $_GET['nom'] . ' ' . $_GET['prenom'];
        }
        ?>
        <a class="button" href="http://php6/Exercice1.php?nom=Nemare&amp;prenom=Jean/"><button type="button" class="btn btn-primary">Exercice 1</button></a>  
    </body>
</html>
