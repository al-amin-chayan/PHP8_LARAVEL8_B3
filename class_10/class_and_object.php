<?php

class Account {

    public $balance;

    public function __construct($balance)
    {
        $this->balance = $balance;
    }
}

$account = new Account(100);
echo $account->balance;

$account2 = new Account(200);
echo $account2->balance;