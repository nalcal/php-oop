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
//lecture 5
class zoo {

public $monkeys;

public $lions;

public $tigers;

public $zebras;

public $elephants;

public $fish;

public $snakes;

function __construct($tigers, $monkeys, $lions, $zebras, $elephants, $fish, $snakes) {

$this­>tigers = $tigers;

$this­>monkeys = $monkeys;

$this­>lions = $lions;

$this­>zebras = $zebras;

$this­>elephants = $elephants;

$this­>fish = $fish;

$this­>snakes = $snakes;

}

function zoo() {

return “This is my “ . $this­>monkeys .

“ and lions ” . $this­>lions .

“ and this is my tigers “ . $this­>tigers . “ .”;

}

}

class Monkeys extends Zoo {

function __construct($tigers, $monkeys, $lions, $zebras, $elephants, $fish){

$this­>zoo = $zoo;

}

function zoo() {

return $this­>zoo;

parent::__construct($tigers, $monkeys, $lions, $zebras, $elephants);

}

}

class Dog extends Zoo {

function __construct($tigers, $monkeys, $lions, $zebras, $elephants, $fish) {

$this­>bark = $snakes;

}

function zoo() {

return $this­>snakes;

}

}

$zoo = new Cat(“Fish”, “monkeys”, “zebras”, “lions”, 15, true);

print “Zoo 1 is a ” . $zoo­>zoo();

parent::__construct($tigers, $monkeys, $lions, $zebras, $elephants);