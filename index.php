<pre>
<?php

class Wallet
{
  function __construct(public int $amount)
  {
  }
}

class User
{
  public Wallet $wallet;

  function getWallet(): Wallet
  {
    return $this->wallet;
  }

  function setWallet(Wallet $wallet)
  {
    $this->wallet = $wallet;
  }

}

$user = new User();
$theWallet = new Wallet(200);
$user->setWallet($theWallet);

echo $user->wallet->amount;
//echo $user->getWallet();

?>
</pre>