<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>constante</title>
</head>
<body>
<nav>
        <ul>
            <li><a href="varaible.php">variable</a> </li>
            <li><a href="constante.php">constante</a> </li>
        </ul>
    </nav>
    <h1>
        <?php
        echo "bonjour tout le monde!!" . "<br>";
        // les constant 
        define("pi", 3.14);
        echo pi;
        
        ?>
    </h1>
</body>
</html>