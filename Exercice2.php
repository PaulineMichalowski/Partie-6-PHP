<html>
    <head>
        <title>Exercice 2</title>
    </head>
    <body>
        <?php
        if (isset($_GET['age'])) {
            echo 'Tu as ' . $_GET['age'];
        } else {
            echo 'Il faut renseigner un age !';
        }
        ?> 
    </body>
</html>
