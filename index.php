<?php

abstract class Animal
{
    
    protected $name;
    protected $weight;
    protected $num_paws;

    public function __construct($name, $weight, $num_paws) // имя, вес, кол-во лап
    {
        $this->name = $name;
        $this->weight = $weight;
        $this->num_paws = $num_paws;
    }

    public abstract function sound(); // звук животного 


    public function jump()
    {
        //code jump
    }

}
// Лось
class Elk extends Animal
{
    public $horns;

    public function __construct($name, $weight, $num_paws, $horns) // имя, вес, кол-во лап, наличие рог
    {
        parent::__construct($name, $weight, $num_paws);
        $this->horns = $horns;
    }
    
    public function sound()
    {
        echo 'muuuu';
    }
}
// Летучая мышь
class Bat extends Animal
{
    public $wings;
    
    public function __construct($name, $weight, $num_paws, $wings) // имя, вес, кол-во лап, длина крыльев
    {
        parent::__construct($name, $weight, $num_paws);
        $this->wings = $wings;
    }
    
    public function sound()
    {
        echo 'uh-uh-uh';
    }
    public function fly()
    {
        if(isset($this->wings))
        {
            return $this->wings = $this->wings + 2;
        }
    }
}

$elk = new Elk('Elk', 200, 4, 'yes');   //Лось с рогами
$elk = new Elk('Elk_01', 150, 4, 'no'); // Лось без рог
$bat = new Bat('Bat', 15, 2, 2.5);      // Летучая мышь 

echo '<pre>';
print_r($elk);
$elk->sound(); //Лось издал звук 
echo '<br>';
print_r($bat);
$bat->fly();   // Летучая мышь летает
$bat->sound(); // Летучая мышь кричит
echo '<br>';
print_r($bat);
echo '</pre>';