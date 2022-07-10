<?php

require_once "ShapeFactory.php";

$factory = new ShapeFactory();
$circle = $factory->create("CIRCLE");
$rectangle = $factory->create("RECTANGLE");
echo $circle->draw();
echo "\n";
echo $rectangle->draw();
