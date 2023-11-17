<?php
class Animal
{
    private string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function toString(): string
    {
        return "Anial[name={$this->name}";
    }
}

class Mammal extends Animal
{

    public function __construct(string $name)
    {
        parent::__construct($name);
    }
    public function toString(): string
    {
        return "Mammal[" . parent::toString() . "]";
    }
}

class Dog extends Mammal
{

    public function __construct(string $name)
    {
        parent::__construct($name);
    }
    public function greets(Dog $dog): string
    {
        return "woof";
    }

    public function toString(): string
    {
        return "Dog[" . parent::toString() . "]";
    }
}
class Cat extends Mammal
{

    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function greets(): void
    {
        echo "meow";
    }
    public function toString(): string
    {
        return "Cat[" . parent::toString() . "]";
    }
}
