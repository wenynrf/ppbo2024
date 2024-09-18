<?php
// Trait 1
trait Animal {
    public function eat() {
        return "Animal eats";
    }
}

// Trait 2
trait Vehicle {
    public function move() {
        return "Vehicle moves";
    }
}

// Class Turunan 1 (Multiple Inheritance menggunakan Traits)
class RobotDog {
    use Animal, Vehicle;

    public function speak() {
        return "RobotDog speaks";
    }
}

// Class Turunan 2 (Hierarchical)
class PetDog extends RobotDog {
    public function play() {
        return "PetDog plays";
    }
}

// Contoh penggunaan
$petDog = new PetDog();
echo $petDog->eat();   // Output: Animal eats
echo $petDog->move();  // Output: Vehicle moves
echo $petDog->speak(); // Output: RobotDog speaks
echo $petDog->play();  // Output: PetDog plays
?>

