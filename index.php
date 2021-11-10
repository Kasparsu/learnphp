<?php

$name = 'Kaspar';

echo "Hello \n $name";

// $array = array();
$array = [];
$array = [1, 2, 3, 4, 'aasda', 1.3, ];
$array = [
    'name' => 'Kaspar',
    'age' => 28,
    5 => true
];

echo $array['name'];

array_push($array, 32,422,4131,41414);
$array[] = "hello";
$array['color'] = 'green';
var_dump($array);

foreach($array as $key=>$value){
    echo $key . ':' . $value . "\n";
}
unset($array['color']);
foreach($array as $value){
    echo $value . "\n";
}

var_dump($array);

trait Pettable {
    public $hasFur;
    public function setHasFur($value){
        $this->hasFur = $value;
    }
}

class Cat {
    use Pettable;
    private $name;
    public function __construct($name){
        $this->name = $name;
        echo "Cat Constructor\n";
    }

    public function __get($name){
        return "hey \$this->$name is not existing!";
    }

    public function __set($name, $value){
        echo "hey \$this->$name is not existing cannot give it value $value!";
    }

    public function __destruct(){
        echo "Cat Desctructor\n";
    }
}

$cat = new Cat("Nuustik");
$cat->age = 23;
echo "something else \n";
var_dump($cat->color);
var_dump($cat);
$cat2 = clone $cat;
var_dump($cat2);

$num = 1;
$num2 = $num;
$num2 = 2;
var_dump($num, $num2);


$num = 1;
var_dump($num);
$num = null;
var_dump($num);
unset($num);
//var_dump($num); WARNING!