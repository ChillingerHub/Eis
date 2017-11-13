<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 12.11.2017
 * Time: 19:39
 */

namespace Stefan\Ice;


class IceBucket extends ice
{
    private $diameter;
    private $height;


    public function __construct($bezeichnung, $sorte, $diameter, $height)
    {
        parent::__construct($bezeichnung, $sorte);
        $this->diameter = $diameter;
        $this->height = $height;
    }


    public function getVolume() : float{
        return (pi()*$this->diameter)*$this->height;
    }
}