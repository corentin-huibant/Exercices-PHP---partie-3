<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Partie 3 Exercice 1</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Exercice 1</h1>
        <p>
            <?php 
//initialisation d'une variable de type entier:
                $myVariable = 0;
//utilisation d'un boucle while (tant que) qui stipule que tant que la variable est inférieur à 11:
                while ($myVariable < 11) {
                    //afficher myVariable
                    echo $myVariable . ' ';
                    //qu'on incrémente de 1
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