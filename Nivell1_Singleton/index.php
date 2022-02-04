<?php


class Tigger {

// PROPIEDADES
    private static $instance;

    private $counter;

//MÉTODOS
    private function __construct() {
            
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)){ //if (self::$instance === null) ¿SERÍA OTRA MANERA DE EXPRESAR LO MISMO?

            self::$instance = new self();
        }

        return self::$instance;
    }

    public function roar() {
            echo "Grrr!" . PHP_EOL;
            ++$this->counter;
    }

    public function getCounter()
    {
        return $this->counter;
    }

    }

Tigger::getInstance() -> roar();
echo "<br>";
Tigger::getInstance() -> roar();
echo "<br>";
Tigger::getInstance() -> roar();
echo "<br>";
Tigger::getInstance() -> roar();
echo "<br>";
Tigger::getInstance() -> roar();
echo "<br>";
echo 'Tigger ha rugido '.Tigger::getInstance()->getCounter().' veces.'."<br>";


//COMPROBANDO QUE EL OBJETO SE INSTANCIA UNA SOLA VEZ
{

$t1 = Tigger::getInstance();
$t2 = Tigger::getInstance();
    if ($t1 === $t2) {
        echo "Singleton funciona, ambas variables contienen la misma instancia.";
    } else {
        echo "Singleton falló.";
    }
}


?>


