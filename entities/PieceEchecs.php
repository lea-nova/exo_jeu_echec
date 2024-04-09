<?php
abstract class PieceEchecs
{

    protected $x;
    protected $y;
    protected $couleur;





    public function __construct(
        int $x,
        int $y,
        Couleur $couleur = null,


    ) {
        $this->peutAllerA($x, $y);
        $this->estDansLEchiquier($x, $y);
        $this->setCouleur($couleur);
        $this->setX($x);
        $this->setY($y);
    }

    abstract protected function peutAllerA();


    public function estDansLEchiquier()
    {
        if (($this->x <= 8) && ($this->x >= 1) && ($this->y <= 8 && $this->y >= 1)) {
            $bienPlace = true;
        } else {
            $bienPlace = false;
        }

        return $bienPlace;
    }

    public function __toString()
    {
        return $this->x . " " . $this->y;
    }

    /**
     * Get the value of x
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set the value of x
     *
     * @return  self
     */
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get the value of y
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Set the value of y
     *
     * @return  self
     */
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }

    /**
     * Get the value of couleur
     */
    public function getCouleur()
    {
        if ($this->couleur == Couleur::NOIR) {
            $this->couleur = Couleur::NOIR;
        } else {
            $this->couleur = Couleur::BLANC;
        }

        return $this->couleur;
    }

    /**
     * Set the value of couleur
     *
     * @return  self
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }


    public function getCouleurCase()
    {
        if (($this->x + $this->y) % 2 == 0) {
            $couleurCase = Couleur::NOIR;
        } else {
            $couleurCase = Couleur::BLANC;
        }
        return $couleurCase;
    }
}
