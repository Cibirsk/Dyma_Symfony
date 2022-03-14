<pre>
<?php

class Math{
    public static float $pi = 3.14;

    static function getPi(){
        return self::$pi; //remplace this->
    }
}

echo Math::$pi;      //remplace ->
echo Math::getPi();

$math = new Math();
echo $math::$pi;
echo $math::getPi();

?>
</pre>