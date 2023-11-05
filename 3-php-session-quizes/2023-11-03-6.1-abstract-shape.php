
<?php
abstract class Shape
{

    protected string $color = "red";
    protected bool $filled = true;
    public function __construct(string $color, bool $filled)
    {
        $this->color = $color;
        $this->filled = $filled;
    }

    public function getColor(): string
    {
        return $this->color;
    }
    public function setColor($color): void
    {
        $this->color = $color;
    }
    public function setFilled($filled): void
    {
        $this->filled = $filled;
    }
    public function isFilled(): bool

    {
        return $this->filled;
    }
    abstract function getArea(): float;
    abstract function getPerimeter(): float;
    public function toString(): string
    {
        return "Shpape[color={$this->color},filled={$this->filled}]";
    }
}

class Circle extends shape
{
    protected float $radius;

    public function __construct(float $radius, string $color, bool $filled)
    {
        parent::__construct($color, $filled);
        $this->radius = $radius;
    }
    public function setRadius($radius): void
    {
        $this->radius = $radius;
    }
    public function getRadius(): float

    {
        return $this->radius;
    }
    public function getArea(): float
    {
        return pow($this->radius, 2) * pi();
    }
    public function getPerimeter(): float
    {
        return 2 * $this->radius * pi();
    }
    public function toString(): string
    {
        return "Circle[".parent::toString().",radius={$this->radius}]";
    }
}


class Rectangle extends shape
{
    protected float $width;
    protected float $length;

    public function __construct(float $width, float $length, string $color, bool $filled)
    {
        parent::__construct($color, $filled);
        $this->width = $width;
        $this->length = $length;
    }

    public function setWidth($width): void
    {
        $this->width = $width;
    }
    public function getWidth(): float

    {
        return $this->width;
    }
    public function setLength($length): void
    {
        $this->length = $length;
    }
    public function getlength(): float

    {
        return $this->length;
    }


    public function getArea(): float
    {
        return $this->width * $this->length;
    }
    public function getPerimeter(): float
    {
        return 2 * ($this->width + $this->length);
    }
    public function toString(): string
    {
        return "Recangle[".parent::toString().",width={$this->width},length={$this->length}]";
    }
}


class Square extends Rectangle
{


    public function __construct(float $side, string $color, bool $filled)
    {
        parent::__construct($side, $side, $color, $filled);
    }

    public function getSide(): float
    {
        return parent::getWidth();
    }
    public function setSide($side): void
    {

        parent::setWidth($side);
        parent::setLength($side);
    }
    public function setWidth($side): void
    {
        $this->setSide($side);
    }
    public function setLength($side): void
    {
        $this->setSide($side);
    }
    public function __toString(): string
    {
        return "Square[{" . parent::toString() . "}]";
    }
}

$s1 = new Square(35.3, "red", true);
