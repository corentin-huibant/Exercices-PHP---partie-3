<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Partie 3 Exercice 8</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Exercice 8</h1>
            <?php 
//utilisation d'un boucle for qui initie (1), conditionne (tant que inférieur ou égal à 100) et incrémente de +15
                for ($myVariable = 200; $myVariable >= 0; $myVariable -= 12) {
            ?>
 <!-- fermeture de la première balise PHP en plein milieu d'une boucle for -->
        <p> <?php  echo 'Enfin !!!!'; ?> </p>
            <?php 
                }
            ?>
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
    </body>
</html>