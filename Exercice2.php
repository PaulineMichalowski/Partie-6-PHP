<html>
    <head>
        <title>Exercice 2</title>
    </head>
    <body>
<?php
if(isset($_GET['prenom']) AND isset($_GET['nom'])) {
    echo $_GET['prenom'] . ' ' . $_GET['nom'];
}
if(isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['age'])) {
  echo ' L\'âge n\'apparaît pas !';
}
?>
    </body>
</html>
