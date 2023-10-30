<?php
class InvoiceItem
{
    private string $id;
    private string $description;
    private int $qty;
    private float $unitPrice;

    public function __construct(string $id, string $description, int $qty, float $unitPrice)
    {
        $this->id = $id;
        $this->description = $description;
        $this->qty = $qty;
        $this->unitPrice = $unitPrice;
    }
    public function getId(): string
    {
        return $this->id;
    }
    public function getDescription(): string
    {
        return $this->description;
    }
    public function getQty(): int
    {
        return  $this->qty;
    }

    public function setQty(int $qty): void

    {

        $this->qty = $qty;
    }
    public function getUnitPrice(): float
    {
        return $this->unitPrice;
    }


    public function setUnitPrice(float $unitPrice): void
    {
        $this->unitPrice = $unitPrice;
    }

    public function getTotal(): float
    {
        return $this->unitPrice * $this->qty;
    }

    public function toString(): string
    {
        return "InvoiceItem[id={$this->id},desc={$this->description},qty={$this->qty},unitPrice={$this->unitPrice}]";
    }
}
