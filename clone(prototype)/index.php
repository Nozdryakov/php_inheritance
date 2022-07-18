<?php
class SubObject
{
    static $instances = 0;
    public $instance;

    public function __construct() {
        $this->instance = ++self::$instances;
    }

    public function __clone() {
        $this->instance = ++self::$instances;
    }
}

class MyCloneable
{
    public $object1;
    public $object2;

    function __clone()
    {
        // Принудительно клонируем this->object1, иначе
        // он будет указывать на один и тот же объект.
        $this->object1 = clone $this->object1;
    }
}

$obj = new MyCloneable();

$obj->object1 = new SubObject();
$obj->object2 = new SubObject();

$Sniper = clone $obj;
$Soldier = clone $obj;


print("Оригинальный объект:\n");
print_r($obj);

print("Клонированный объект:\n");
print_r($Sniper);

print("Клонированный объект:\n");
print_r($Soldier);

?>