<?php 
require "header.php"; 

//Step 2
//include car.php and connect.php
require "car.php";
require_once "connect.php";

//Step 3
//new instance of car object and echo the car information in the browser
$car = new Car("BMW", "X5", 2011);
echo $car->getInfo();


echo "<p> <hr> Follow the instructions outlined in instructions.txt to complete this lab. Good luck & have fun!😀 </p>";
require "footer.php"; 

//Step 6
/* The part I found easiest in this lab would be creating the Car class because it was very similar to programming examples I have worked with in the past. Using properties, a constructor, and methods was familiar just syntax was different. 
The part I found the most challenging was figiring out how to set up the data base and local server as it was something new for me and I also missed last class so having to figure it out took me some time to understand. 
*/
