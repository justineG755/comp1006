<?php 

//Step 2
//class to represent a car
class Car{

    //Properties
    public string $make; //store car make
    public string $modle; //store car model
    public int $year; //store the car year

    //Constructor
    public function __construct(string $make, string $modle, int $year)
    {
        //assigns values into properties
        $this-> make = $make;
        $this-> modle = $modle;
        $this-> year = $year;
    }

    //method that returns car information
    public function getInfo(): string
    {
        return "Make: {$this->make} | Modle: {$this->modle} | Year: {$this->year} ";
    }

}