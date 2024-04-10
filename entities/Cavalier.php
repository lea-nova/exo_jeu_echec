<?php
class Cavalier extends PieceEchecs
{
    // private $x;
    // private $y;
    public function __construct(int $x, int $y)
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
        /*
Valeur de déplacement pour un Cavalier 
*/
        if (($this->x >= -2 && $this->x <= 2) && ($this->y >= -2 && $this->y <= 2)) {
            $peutAller = "Je peux aller.";
        } else {
            $peutAller = "Je ne peux pas";
        }

        return $peutAller;
    }
}
