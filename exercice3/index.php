<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Partie 3 Exercice 3</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Exercice 3</h1>
        <p>
            <?php 
//initialisation de deux variables de type entier:
                $myVariable = 100;
                $myMultiplicates = 3;
//utilisation d'un boucle for qui comprend l'initialisation, la conditant (tant que ma variable n'est pas inférieur à moins dix) et la décrémentation
                for ($myVariable = 100; $myVariable >= 10; $myVariable--) {
                    //Tant que la condition n'est pas réalisée, on multiplie la variable myVariable avec myMultiplicates
                    echo $myVariable * $myMultiplicates. ' ';
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