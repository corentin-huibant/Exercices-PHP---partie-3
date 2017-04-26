<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Partie 3 Exercice 2</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Exercice 2</h1>
        <p>
            <?php 
//initialisation de deux variables de type entier:
                $myVariable = 0;
                $myMultiplicates = 3;
//utilisation d'un boucle while (tant que) qui stipule que tant que la variable myVariable est inférieur à 21:
                while ($myVariable < 21) {
                    //on multiplie la variable myVariable par la variable myMultiplicates
                    echo $myVariable * $myMultiplicates . ' ';
                    //variable myVariable qu'on incrémente de 1
                    $myVariable++;
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