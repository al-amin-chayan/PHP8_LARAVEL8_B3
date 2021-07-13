<?php
class Account {

    protected $balance;

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

class CcAccount extends Account {

    public function __construct($balance)
    {
        if ($balance < 500) {
            throw new Exception('Opening balance is low');
        }
        $this->balance = $balance;
    }
}
try {
    $account = new CcAccount(100);
    $account->credit(100);
    $account->debit(50000);
    echo $account->getBalance();
} catch(\Exception $e) {
    echo $e->getMessage();
}
