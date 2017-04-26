<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Partie 3 Exercice 5</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Exercice 5</h1>
        <p>
            <?php 
//utilisation d'un boucle while dont la condition spécifie que tant que la variable est inférieur ou égal à 10
                for ($myVariable = 1; $myVariable <= 15; $myVariable++) {
                    //on incrémente de la moitié de la valeur de myVariable
                    echo 'On y arrive presque, ';
                }
            ?>
        </p>
        <nav>
           <h2>Liens des exercices</h2>
           <ul>
               <li><a href="http://partie3exo1">Exercice 1</a></li>
               <li><a href="http://partie3exo2">Exercice 2</a></li>
               <li><a href="http://partie3exo3">Exercice 3</a></li>
               <li><a href="http://partie3exo4">Exercice 4</a></li>
               <li><a href="http://partie3exo5">Exercice 5</a></li>
               <li><a href="http://partie3exo6">Exercice 6</a></li>
               <li><a href="http://partie3exo7">Exercice 7</a></li>
               <li><a href="http://partie3exo8">Exercice 8</a></li>
           </ul>
       </nav>
</html>