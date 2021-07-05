<?php
class Car {
    // constructor should be public
    public function __construct($brand, $year_make) {
        $this->brand = $brand;
        $this->year_make= $year_make;
    }

    // for external use
    public function print_details() {
        echo "This car is a " . $this->year_make ." ". $this->brand .".\n";
    }

}

$car = new Car("Toyota", 2006);
$car->print_details();