<?php
class Account {

    public function __construct(protected float $balance)
    {
    }

    public function credit(int $amount)
    {
        $this->balance += $amount;
    }

    public function debit(int $amount)
    {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
        }
    }

    public function getBalance()
    {
        return $this->balance;
    }
}


$account = new Account(100);
var_dump($account->getBalance());