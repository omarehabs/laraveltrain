<?php
class Account
{
    private string $id;
    private string $name;
    private int $balance;

    public function __construct(string $id, string $name, int $balance)
    {
        $this->id = $id;
        $this->name = $name;
        $this->balance = $balance;
    }

    public function getId(): string
    {
        return $this->id;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getBalance(): int
    {
        return $this->balance;
    }

    public function credit(int $amount): int
    {
        $this->balance += $amount;
        return $this->balance;
    }

    public function debit(int $amount): int
    {
        if ($amount < 0) {
            echo 'Amount exceeded balance';
        } else {
            $this->balance -= $amount;
        }
        return $this->balance;
    }

    public function transferTo(Account $anotherAcc, int $amount): int
    {
        if ($this->balance < $amount) {
            echo "Amount exceeded balance";
        } else {
            $this->balance -=$amount;
            $anotherAcc->credit($amount);
        }
        return $this->balance;
    }

    public function toString(): string
    {
        return "Account[id={$this->id},name={$this->name},balance={$this->balance}]";
    }
}


$acc1 = new Account('1', "omar", 566);
$acc2 = new Account('2', "ehab", 1900);


$acc2->transferTo($acc1,400);

echo $acc1->toString();
echo $acc2->toString();