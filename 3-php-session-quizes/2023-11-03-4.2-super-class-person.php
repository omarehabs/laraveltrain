<?php

class Person
{
    protected string  $name;
    protected string  $address;

    public function __construct(string $name, string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }
    
    public function getName(): string
    {
        return $this->name;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function toString(): string
    {
        return "Pesron[name={$this->name},address={$this->address}]";
    }
}
class Student extends Person
{
    private string $program;
    private int $year;
    private float $fee;
    public function __construct(string $name, string $address, string $program, int $year, float $fee)
    {
        $this->program = $program;
        $this->year = $year;
        parent::__construct($name, $address);
    }
    public function getProgram(): string
    {
        return $this->program;
    }
    public function getYear(): int
    {
        return $this->year;
    }
    public function getFee(): float
    {
        return $this->fee;
    }

    public function setProgram($program): void
    {
        $this->program = $program;
    }
    public function setYear(int $year): void
    {
        $this->year = $year;
    }
    public function setFee(int $fee): void
    {
        $this->fee = $fee;
    }
    public function __toString(): string
    {
        return "Student[Pesron[name={$this->name},address={$this->address}],program={$this->program},year={$this->year},fee={$this->fee}]";
    }
}
class Stuff extends Person
{
    private string $school;
    private float $pay;
    public function __counstruct(string $name, string $address, string $school, float $pay)
    {

        parent::__construct($name, $address);
        $this->school = $school;
        $this->pay = $pay;
    }
    public function setSchool($school): void
    {
        $this->school = $school;
    }
    public function setPay(float $pay): void
    {
        $this->pay = $pay;
    }

    public function getSchool(): string
    {
        return $this->school;
    }
    public function getPay(): float
    {
        return $this->pay;
    }

    public function toStrin(): string
    {
        return "Staff[Pesron[name={$this->name},address={$this->address}],school={$this->school},pay={$this->pay}]";
    }
}
