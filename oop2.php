<?php
require_once 'oop.php';
class TervislikBurger extends Burger{
    protected $tervislikLisand1 = 'avokaado';
    protected $tervislikLisand1Hind = 2;
    protected $tervislikLisand2 = 'hummus';
    protected $tervislikLisand2Hind = 2;
    public function valiTervislik1($kogus){
        $lisandistKokku = $kogus * $this -> tervislikLisand1Hind;
        $this -> hind = $this -> hind + $lisandistKokku;
        $this -> valitud[] = $this -> tervislikLisand1;
    }
    public function valiTervislik2($kogus){
        $lisandistKokku = $kogus * $this -> tervislikLisand2Hind;
        $this -> hind = $this -> hind + $lisandistKokku;
        $this -> valitud[] = $this -> tervislikLisand2;
    }
}