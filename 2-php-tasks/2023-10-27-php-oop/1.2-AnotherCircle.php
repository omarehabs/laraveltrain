<?php

class AnotherCircle
{
    private float  $radius = 1.2;
    public function __construct(float $r)
    {
        $this->radius = $r;
    }

    public function getRadius(): float
    {
        return $this->radius;
    }
    public function setRadius($newRadius): void
    {
        $this->radius = $newRadius;
    }
    public function getArea(): float
    {
        return pi() * pow($this->radius, 2);
    }
    public function getcircumference(): float
    {
        return 2 * pi() * $this->radius;
    }
    public function toString(): string
    {
        return "Circle[radius={$this->radius}]";
    }
}


$newCir = new AnotherCircle(5);
echo $newCir->toString();