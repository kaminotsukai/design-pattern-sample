<?php
require_once 'Shape.php';

class Rectangle implements Shape
{
    public function draw(): string
    {
        return "rectangle";
    }
}
