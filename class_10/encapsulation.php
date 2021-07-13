<?php

class Account {

    private $balance;

    public function __construct($balance)
    {
        $this->balance = $balance;
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
        echo PHP_EOL;
        return $this->balance;
    }
}

$account = new Account(100);
echo $account->getBalance();
$account->credit(100);
$account->credit(500);
$account->debit(600);
echo $account->getBalance();