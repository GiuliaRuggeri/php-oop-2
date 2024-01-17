<?php

trait Color
{

    public $color;

    public function getColor()
    {

        if ($this->color) {
            return $this->color;
        }else{
            return "Colore non disponibile";
        }
    }
}
