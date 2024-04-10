<?php

require_once './entities/Couleur.php';
require_once './entities/PieceEchecs.php';
require_once './entities/Cavalier.php';
require_once './entities/Fou.php';
echo Couleur::BLANC . "<br>" . Couleur::NOIR . "<br>";


$fou1 = new Fou(2, 7);
$cavalier1 = new Cavalier(3, 3);

$fou1->estDansLEchiquier();
echo "Le fou : " . $fou1->estDansLEchiquier() . ". <br>Le cavalier : " . $cavalier1->estDansLEchiquier();

$fou1->setCouleur("blanc");
$cavalier1->setCouleur("noir");
echo "<br> Fou 1 : " . $fou1->getCouleur()
    . "<br> Cavalier 1 : " . $cavalier1->getCouleur();

echo "<br>";
echo "Piece 1 :" . $fou1->getCouleurCase() . " <br>Pièce 2: " . $cavalier1->getCouleurCase();
echo "<br>";

echo $cavalier1->__toString() . "<br>";
echo $fou1->__toString() . "<br>";

//10 pièces d'échec.

$nbPieces = 10;
$piecesEchec = array();

for ($i = 0; $i < $nbPieces; $i++) {
    $test = rand(1, 2);
    if ($test == 2) {
        $piecesEchec[] = new Fou(rand(1, 8), rand(1, 8));
    } else {
        $piecesEchec[] = new Cavalier(rand(1, 8), rand(1, 8));
    }


    echo "test: " . $test;
}

foreach ($piecesEchec as $value) {
    $j[] = $value;
    echo "<br>" . $value->peutAllerA(5, 5) . " " . count($j) . " : " . $value . "<br>";
}
