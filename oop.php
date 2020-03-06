<?php
class Burger {
    protected $nimetus = '';
    protected $liha = '';
    protected $sai = '';
    protected $hind;
    protected $lisand1 = 'salat';
    protected $lisand1Hind = 1;
    protected $lisand2 = 'juust';
    protected $lisand2Hind = 1.5;
    protected $lisand3 = 'ketšup';
    protected $lisand3Hind = 0.5;
    protected $lisand4 = 'kastet';
    protected $lisand4Hind = 1;
    protected $valitud = array();
    public function __construct($nimetus, $liha, $sai, $hind){
        $this -> nimetus = $nimetus;
        $this -> liha = $liha;
        $this -> sai = $sai;
        $this -> hind = $hind;
    }
    public function valiLisand1($kogus){
        $lisandistKokku = $kogus * $this -> lisand1Hind;
        $this -> hind = $this -> hind + $lisandistKokku;
        $this -> valitud[] = $this -> lisand1;
    }
    public function valiLisand2($kogus){
        $lisandistKokku = $kogus * $this -> lisand2Hind;
        $this -> hind = $this -> hind + $lisandistKokku;
        $this -> valitud[] = $this -> lisand2;
    }
    public function valiLisand3($kogus){
        $lisandistKokku = $kogus * $this -> lisand3Hind;
        $this -> hind = $this -> hind + $lisandistKokku;
        $this -> valitud[] = $this -> lisand3;
    }
    public function valiLisand4($kogus){
        $lisandistKokku = $kogus * $this -> lisand4Hind;
        $this -> hind = $this -> hind + $lisandistKokku;
        $this -> valitud[] = $this -> lisand4;
    }
    public function koostaBurger($nimetus, $liha, $sai, $hind)
    {
        return
            'Teie valitud burgeri "'.$this-> $nimetus.'" koostiseks on: <br>'
            .$this -> $liha. '<br>'
            .$this -> $sai. '<br>'.
            'Lisandid: <br> '.
            $this -> valitud[0].'<br>'.
            $this -> valitud[1].'<br>'.
            $this -> valitud[2].'<br>'.
            $this -> valitud[3].'<br><br>'.
            'Hind: '
            .$this -> $hind. '€'.
            '<hr></div>';
    }
}
class TervislikBurger extends Burger {
    protected $tervislikLisand1 = 'BBQ kanakaste';
    protected $tervislikLisand1Hind = 2;
    protected $tervislikLisand2 = 'kurk';
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
//Luxburgeri
class LuxBurger extends Burger {
    protected $luxLisa1 = 'peekon';
    protected $luxLisa2 = 'praesibul';
    protected $luxLisa3 = 'terav-magus kaste';
    protected $luxLisa4 = 'Sibul';
    protected $luxJook = ['Pepsi', 'Jaffa', 'SevenUp'];
    protected $luxKartul = ['Lainelised friikartulid', 'Friikartulid'];
    public function koostaLuxBurger($nimetus, $liha, $sai, $hind)
    {
        return
            'Teie valitud burgeri "'.$this-> $nimetus.'" koostis on: <br>'
            .$this -> $liha. '<br>'
            .$this -> $sai. '<br>'.
            $this -> luxLisa1.'<br>'.
            $this -> luxLisa2.'<br>'.
            $this -> luxLisa3.'<br>'.
            $this -> luxLisa4.'<br>'.
            'Lux Burgeriga on kaasas ka '. $this -> luxJook[3]. ' ning '. $this -> luxKartul[2].
            '<br> Koguhinnaks tuleb seega: '
            .$this -> $hind. '€'.
            '<br>';
    }
}
//insert new burgers
$lihtne = new Burger ('Lihtne', 'veiseliha', 'kukkel', 3.5);
$tervislik = new TervislikBurger('Tervislik', 'kanaliha', 'seesamisai', 5);
$lux = new LuxBurger('Lux', 'Pardiliha', 'kukkel', 7);
//display first order
echo $lihtne -> valiLisand1(2);
echo $lihtne -> valiLisand2(1);
echo $lihtne -> valiLisand3(1);
echo $lihtne -> valiLisand4(1);
echo $lihtne -> koostaBurger(nimetus, liha, sai, hind);
//display second order
echo $tervislik -> valiLisand1(1);
echo $tervislik -> valiLisand4(1);
echo $tervislik -> valiTervislik1(1);
echo $tervislik -> koostaBurger(nimetus, liha, sai, hind);
//display third order
echo $lux -> koostaLuxBurger(nimetus, liha, sai, hind);