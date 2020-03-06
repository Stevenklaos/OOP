<?php
require_once 'oop.php';
class LuxBurger extends Burger{
protected $luxLisa1 = 'peekon';
protected $luxLisa2 = 'praesibul';
protected $luxLisa3 = 'poolmagus sinepi-mee kaste';
protected $luxLisa4 = 'sibulamoos';
protected $luxJook = ['Coca', 'Fanta', 'Sprite'];
protected $luxKartul = ['bataadifriikartulid', 'Classic friikartulid'];
public function koostaLuxBurger($nimetus, $liha, $sai, $hind)
{
return '<div style="text-align:center; padding: 180px; padding-bottom: 0;";>
    Teie valitud burgeri "'.$this-> $nimetus.'" koostis on: <br>'
    .$this -> $liha. '<br>'
    .$this -> $sai. '<br>'.
    $this -> luxLisa1.'<br>'.
    $this -> luxLisa2.'<br>'.
    $this -> luxLisa3.'<br>'.
    $this -> luxLisa4.'<br>'.
    '<hr>'.
    'Lux Burgeriga on kaasas ka '. $this -> luxJook[1]. ' ning '. $this -> luxKartul[0].
    '<br> Koguhinnaks tuleb seega: '
    .$this -> $hind. '€'.
    '<hr><hr><br><br></div>';
}
}