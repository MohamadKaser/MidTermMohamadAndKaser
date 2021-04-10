<?php

class Automobile{
    #properties
    public $Licence_Plate;
    public $Brand;
    public $Model;
    public $Model_Year;
    public $Color;

    #methods
    function __construct($Licence, $Brand, $Model, $year, $color){
        $this->Licence_Plate = $Licence;
        $this->Brand = $Brand;
        $this->Model = $Model;
        $this->Model_Year = $year;
        $this->Color = $color;
    }
    function __toString()
    {
        return $this->Licence_Plate . " & " . $this->Brand . " & " . $this->Model;
    }


}