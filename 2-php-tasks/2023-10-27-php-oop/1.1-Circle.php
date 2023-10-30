<?php

class Circle
{
    private float  $radius = 1.2;
    private string $color = "red";
    public function __construct(float $r)
    {
        $this->radius = $r;
    }

    public function getRadius(): float
    {
        return $this->radius;
    }
    public function getArea(): float
    {
        return pi() * pow($this->radius, 2);
    }
}
