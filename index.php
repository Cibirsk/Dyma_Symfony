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
  private string $fullName;
  private bool $isAdmin;
  public Wallet $wallet;

  function setFullName(string $fullName): void
  {
    $this->fullName = $fullName;
  }

  function getWallet(): Wallet
  {
    return $this->wallet;
  }

}



?>
</pre>