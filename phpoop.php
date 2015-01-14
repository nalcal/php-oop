<?php
    class Tiger {

        //class body

        //class body

        //class body

    }
    
    class Lion {

        //class body

        //class body

        //class body

    }
    
    class Puma {

        //class body

        //class body

        //class body

    }
    
   $tiger1 = new Tiger();
   $tiger2 = new Tiger();
   
   $lion1 = new Lion();
   $lion2 = new Lion();

   $puma1 = new Puma();
   $puma2 = new Puma();
   
   class Tiger {

public $location = “India”;

public $species = “cat”;

public $gender = “male”;

public $population = 140;

}

class Lion {

public $location = “Africa”;

public $species = “cat”;

public $gender = “male”;

public $population = 1400;

}

class Puma {

public $location = “South America”;

public $species = “cat”;

public $gender = “male”;

public $population = 1500;

}

$tiger1 = new Tiger();

print $tiger1­>name;

// default name

$lion1 = new Lion();

print $lion1­>name;

// default name

$puma1 = new Puma();

print $puma1­>name;

// default name

public function myMethod( $argument, $another) {

// stuff

}
//lecture 4
class Animal {

public $firstName;

public $lastName;

public $scientificName;

public $gender;

public $weight;

public $bark;

public $meow;

function __construct($scientificName, $firstName, $lastName, $gender, $weight, $bark, $meow) {

$this­>scientificName = $scientificName;

$this­>firstName = $firstName;

$this­>lastName = $lastName;

$this­>gender = $gender;

$this­>weight = $weight;

$this­>bark = $bark;

$this­>meow = $meow;

}

function getName() {

return “This is my “ . $this­>firstName .

“ and last ” . $this­>lastName .

“ and this is my scientific­name “ . $this­>scientificName . “ .”;

}

}

class Cat extends Animal {

function __construct($scientificName, $firstName, $lastName, $gender, $weight, $meow){

$this­>meow = $meow;

}

function greet() {

return $this­>meow;

parent::__construct($scientificName, $firstName, $lastName, $gender, $weight);