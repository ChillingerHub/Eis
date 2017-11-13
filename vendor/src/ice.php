<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 12.11.2017
 * Time: 19:33
 */

namespace Stefan\Ice;


abstract class Ice
{
    private $bezeichnung = "Das ist unser neues Eis";
    private $sorte = "Keine Sorte ausgewählt";

    public function __construct($bezeichnung, $sorte)
    {
        $this->bezeichnung = $bezeichnung;
        $this->sorte = $sorte;
    }

    public function __toString()
    {
        $volume = $this->getVolume();
        return $this->bezeichnung." Sorte: ".$this->sorte." Volumen: ".$volume;
    }
}