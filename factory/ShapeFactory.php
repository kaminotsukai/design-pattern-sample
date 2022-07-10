<?php
require_once 'Rectangle.php';
require_once 'Circle.php';

class ShapeFactory
{
    public function create(string $shapeType): ?Shape
    {
        switch ($shapeType) {
            case "CIRCLE":
                return new Circle();
            case "RECTANGLE":
                return new Rectangle();
            default:
                return null;
        }
        return null;
    }
}
