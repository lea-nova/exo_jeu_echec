<?php
class Fou extends PieceEchecs
{
    // private $x;
    // private $y;

    public function __construct($x, $y)
    {
        parent::__construct($x, $y);
    }

    public function __toString()
    {

        if ($this->estDansLEchiquier() == true) {
            $reponse = "Je suis un " . get_class() . ", je me trouve sur la case (" . $this->getX() . "," . $this->getY() . ") et je suis de couleur " . $this->getCouleur() . ".";
        } else {
            $reponse = "Je suis un " . get_class() . " et je ne suis pas dans l'échiquier.";
        }
        return $reponse;
    }

    public function peutAllerA()
    {
        $peutYAller = "";
        return $peutYAller;
    }
}
