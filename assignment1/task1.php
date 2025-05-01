<?php 
class Animal{
    public function makesound(){
        echo "SOME SOUND";
    }

}
class Dog extends Animal{
    public function makesound(){
        echo"bark";
    }
}
$animal=new Animal();
$animal->makesound();
$dog=new Dog();
$dog->makesound();
?>