<?php 
class Vehicle{
    protected $brand;
    public function __construct($brand) { $this->brand = $brand; }
    public function get_brand() { return $this->brand; }
}
class Car extends Vehicle{
    protected $model;
    public function __construct($brand, $model) { 
        parent::__construct($brand);
        $this->model = $model; 
  

    }
    
    public function get_car() { 
        return $this->brand."<br>".$this->model;
         }

}
$car= new Car("toyota","1332");
echo $car->get_car();

?>