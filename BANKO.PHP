<?php

class BankAccount
{
	public $accountNumber;

	private $balance;

	public function deposit($amount)
	{
		if ($amount > 0) {
			$this->balance += $amount;
		}
	}

	public function withdraw($amount)
	{
		if ($amount <= $this->balance) {
			$this->balance -= $amount;
			return true;
		}
                return false;
    }
        public function getBalance() {
            return $this->balance;
        }
	}


$amount = new BankAccount();
$amount->accountNumber = "1 \n";
    
$amount->withdraw(500);
$amount->deposit(5000);
$amount->withdraw(2000);

echo $amount->accountNumber;
echo $amount->getBalance();
?>