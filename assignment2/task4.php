<?php 
class Vehicle2{
public function makesound(){
    echo "ting !";
}
}
class Car extends Vehicle2{
    public function makesound(){
        echo "Vroom!";
    }
}
class Motorcycle extends Vehicle2{
    public function makesound(){
        echo "Beep Beep !";
    }
}
class Truck extends Vehicle2{
    public function makesound(){
        echo "Rev Rev";
    }
}
$vehiclesounds= new Truck();
$vehiclesounds->makesound();

?>