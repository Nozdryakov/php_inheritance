<?php

interface Earth
{
    public function bite();
}

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


    public function run()
    {
        //code run
    }
    public function jump()
    {
        //code jump
    }

}
// Лось
class Elk extends Animal implements Earth
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
    public function bite()
    {

    }
}
// Летучая мышь
class Bat extends Animal implements Earth
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
    public function bite()
    {

    }
}
//Дельфин
class Dolphin extends Animal
{
    public function __construct($name, $weight, $num_paws) 
    {
        parent::__construct($name, $weight, $num_paws);
        
    }
    
    public function sound()
    {
        echo 'rurh-rurh!';
    }
    
    public function dive()
    {
        //code dive
        echo "I'm diving...";
    }
}

class DolphinAdapter implements Earth
{
    protected $dolphin;
    public function __construct(Dolphin $dolphin)
    {
        $this->dolphin = $dolphin;
    }
    public function swim()
    {
        $this->dolphin->dive();
    }
    public function bite()
    {

    }
}

$Dolphin = new Dolphin('dolphin',80,0);
$DolphinAdapter = new DolphinAdapter($Dolphin);

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

print_r($Dolphin);
$DolphinAdapter->swim();
echo '</pre>';