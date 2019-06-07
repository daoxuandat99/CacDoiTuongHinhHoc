<?php
include_once('Circle.php');
include_once('Cylinder.php');
include_once('Rectangle.php');
include_once('Square.php');
$circle = new Circle('circle', 5);
echo 'Circle area: ' . $circle->calculateArea() . '<br>';
echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br>';
$cylinder = new Cylinder('cylinder', 5, 10);
echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br>';
echo 'Cylinder perimeter: ' . $cylinder->calculateVolume() . '<br>';
$rectangle = new Rectangle('rectangle', 10, 5);
echo 'Rectangle area: ' . $rectangle->calculateAre() . '<br>';
echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br>';
$square = new Square('square', 4, 4, 4);
echo 'Square area: ' . $square->calculateAre() . '<br />';
echo 'Square perimeter: ' . $square->calculatePerimeter() . '<br />';