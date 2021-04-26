<?php
// https://www.youtube.com/watch?v=yPd-t9YoKwM
// https://www.youtube.com/playlist?list=PLs22jecupX27jocUYX7HOHPTFNjjUBeLD

class Person{
	var $age;
	var $eye_color;
	var $name;

	public $one;
	private $two =3;
	protected $three =3;

	private $word;

	static $population = 0;
	static $people = 20;


     public function __set($property, $value){
         if( (property_exists($this, $property)) && ($value >= 0) && ($value <= 15)){
            $this->$property = $value;
            echo "You succesfully updated {$property} to {$value} <br/>";
         } else {
            echo "Failed to update {$property}. <br/>";
         }
     }

     public function __get($property){

        echo "You tried to update or access {$property}";

     }


	public function __construct($age, $eye_color){
		$this->age = $age;
		$this->eye_color = $eye_color;
		echo "This is the age: " . $this->age . "<br/>";
		echo "This is the eye color: " . $this->eye_color . "<br/>"; 
		self::$population++;
		echo "This is the current number of instance: " . self::$population . "<br/>";
	}

	static public function say_population(){
		echo "This is the population: " . self::$population . "<br/>";
	}

	function sayNums(){
		echo $this->one;
		echo $this->two;
		echo $this->three;
	}

	function say_age(){
		echo "This is the age: " . $this->age;
	}
}

$dude = new Person(22,"Brown");
$girl = new Person(44,"Blue");
$bob = new Person(55,"Green");

$dude->haha = 55;

$dude->word;