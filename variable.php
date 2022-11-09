<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variable</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="varaible.php">Variable</a> </li>
            <li><a href="constante.php">constante</a> </li>
            <li><a href="index.php">home</a> </li>
        </ul>
    </nav>
    <h1>
        <?php
        echo "bonjour tout le monde!!";
        # une seul ligne de commentaire
        /* plusieur lgne des commentaires
        ligne1
        ligneé*/
        echo "<hr>";//affiche une ligne separateur
        // Declaration des varaibles
        $a= 2;
        $nom = "hassan";
        $x = 2.6;
        echo $a . "<br>" ;
        echo $nom . "<br>";
        // (.) est l'operateur de concatenation
        echo $x . "<br>";
        $a =34 . "<br>";
        echo $a . "<br>";
    
        ?>
    </h1>
</body>
</html>