<?php

class Rectangle
{
    private float  $length = 1.0;
    private float  $width = 1.0;
    public function __construct(float $len, float $width)
    {
        $this->length = $len;
        $this->width = $width;
    }

    public function getLength(): float
    {
        return $this->length;
    }
    public function setLength($newLength): void
    {
        $this->length = $newLength;
    }
    public function getWidth(): float
    {
        return $this->width;
    }
    public function setWidth($newWidth): void
    {
        $this->width = $newWidth;
    }
    public function getArea(): float
    {
        return $this->width * $this->length;
    }
    public function getPerimeter(): float
    {
        return $this->length * $this->width * 2;
    }
    public function toString(): string
    {
        return "Circle[length={$this->length},width={$this->width}]";
    }
}
