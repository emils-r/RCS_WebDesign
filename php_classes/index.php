<?php
abstract class Animal
{
    const SOME_VALUE = 123;
    protected $name;
    protected $energy = 10;
    public static $animalCount = 0;

    public function __construct($name){
        $this->name = $name;
        self::$animalCount++;
    }

    public function eat(int $portions) {
        $this->energy += $portions;
        echo $this->name . ' is eating. <br>';
    }

    public function run() {
        $this->energy--;
        echo $this->name . ' is running. <br>';
    }
}

interface Flyable
{
    public function fly(int $distance);
}

class Crow extends Animal implements Flyable
{
    public function fly($distance){
        echo $this->name . ' is flying ' . $distance . ' meters. <br>';
        $this->energy--;
    }
}

$pether = new Crow('Pether');


// echo Animal::$animalCount . '<br>';
// Animal::$animalCount = 1;
// echo Animal::$animalCount . '<br>';
// echo Animal::SOME_VALUE .'<br>';

$rex = new Dog('Rex');
$billy = new Russel('Billy');

$rex->run();
$rex->run();
$rex->run();
$rex->run();

$rex->eat(1);
$rex->eat(1);

$billy->eat(5);

$pether->fly(20);

echo Animal::$animalCount;

dd($pether);
dd($billy);
dd($rex);

echo 123;


function dd($var){
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    die;
}

class Dog extends Animal
{
    protected $energy = 100;
}

class Russel extends Dog
{
    protected $energy = 20;
}
