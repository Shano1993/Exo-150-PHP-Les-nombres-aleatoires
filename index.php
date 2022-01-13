<?php

/**
 * 1. Générez un nombre aléatoire compris entre 0 et 50, affichez le avec echo dans un nouveau <div>.
 */

// TODO Votre code ici.
$nmbr1 = rand(0, 50);
echo "<div>Mon nombre aléatoire est $nmbr1</div>";


/**
 * 2. Générez un nombre aléatoire compris entre 50 et getrandmax, affichez le résultat dans un nouveau <p>
 */

// TODO Votre code ici.
$nmbr2 = rand(0, getrandmax());
echo "<p>Mon nombre aléatoire est $nmbr2</p>";

/**
 * 3. Générez un nombre aléatoire compris entre 0 et 50
 * ==> si le nombre est inférieur ou égal à 25, affichez : vous avez gagné ( dans un nouveau <p> )
 * ==> si ce n'est pas le cas, affichez : vous avez perdu ( dans un nouveau <p> )
 */

// TODO Votre code ici.
$nmbr3 = rand(0, 50);
if ($nmbr3 <= 25) {
    echo "<p>Votre nombre est le $nmbr3, il est inférieur à 25, Vous avez gagnez !</p>";
}
else {
    echo "<p>Votre nombre est le $nmbr3, il est supérieur à 25, Vous avez perdu !</p>";
}


/**
 * 4. Créez une fonction qui génère un nombre aléatoire compris entre $max et $min ( paramètres ).
 * ==> Si le nombre est compris entre $max et $max -100, regénérez un nouveau nombre avec un appel récursif.
 * ==> Si ce n'est pas le cas, retournez tout simplement le nombre généré.
 */

// TODO Votre code ici.
function nmbrAleatory($min, $max) {
    $nmbrRandom = rand($min, $max);
    if ($max > $nmbrRandom && $nmbrRandom > ($max -100)) {
        nmbrAleatory($min, $max);
    }
    else {
        echo $nmbrRandom;
    }
}

nmbrAleatory(0, 1000);



