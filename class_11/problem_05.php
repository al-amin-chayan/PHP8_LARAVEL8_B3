<?php
/*
 * Create a class called BankAccount which represents a bank account, having as attributes:
 * accountNumber (numeric type), name (name of the account owner as string type), balance.
 * - Create a constructor with parameters: accountNumber, name, balance.
 * - Create a deposit() method which manages the deposit actions.
 * - Create a withdrawal() method which manages withdrawals actions.
 * - Create a bankFees() method to apply the bank fees with a percentage of 5% of the
 *   balance account.
 * 
 * - Create a display() method to display account details.
 * Give the complete code for the BankAccount class.
 */

class BankAccount {

    public const MINIMUM_DEPOSIT_AMOUNT = 100;
    protected const MINIMUM_BALANCE = 500;
    protected const BANK_FEES_PERCENTAGE = 5;

    protected float $balance;

    public function __construct(
        protected string $name,
        protected int $accountNumber,
        float $balance,
    )
    {
        if ($balance < self::MINIMUM_BALANCE) {
            throw new Exception('Please provide minimum balance ' . self::MINIMUM_BALANCE);
        }

        $this->balance = $balance;
    }

    public function deposit(float $amount): void
    {
        if ($amount < self::MINIMUM_DEPOSIT_AMOUNT) {
            throw new Exception('Too few amount');
        }
        $this->balance += $amount;
    }

    public function withdrawal(float $amount): void
    {
        if ($amount < 0) {
            throw new Exception('Invalid Amount');
        }

        if ($this->balance - $amount < self::MINIMUM_BALANCE) {
            throw new Exception('Not allowed');
        }

        $this->balance -= $amount;
    }

    public function bankFees()
    {
        $fees = $this->balance * (self::BANK_FEES_PERCENTAGE/100);
        $this->balance -= $fees;
    }

    public function display(): array
    {
        return [
            'name' => $this->name,
            'accountNumber' => $this->accountNumber,
            'balance' => $this->balance,
        ];
    }
}

try {
    $account = new BankAccount('Abdul Halim', 123456789, 1000);
    $account->deposit(500);
    $account->withdrawal(700);
    $account->bankFees();

    var_dump($account->display());

    var_dump(BankAccount::MINIMUM_DEPOSIT_AMOUNT);
} catch(\Exception $exception) {
    var_dump($exception->getMessage());
}
