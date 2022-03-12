<pre>
<?php

class User {
  private $fullName;

  function __construct(private $firstName, private $lastName){
      $this->fullName = $this->firstName . ' ' . $this->lastName;
  }

//   function getFullName(){
//       return $this->fullName;
//   }

//   function setFirstName($value){
//       $this->firstName = $value;
//       $this->fullName = $this->firstName . ' ' . $this->lastName;
//   }

//   function setLastName($value){
//       $this->lastName = $value;
//       $this->fullName = $this->firstName . ' ' . $this->lastName;
//   }
}

// $user = new User('Bob', 'Sinclar');
// echo $user->getFullName() . '<br>';

// $user->setFirstName('Paul');
// $user->setLastName('Brandon');
// echo $user->getFullName() . '<br>';



?>
</pre>