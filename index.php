<pre>
<?php

class User {
  function __construct(public $name) {}
}

class Admin extends User {
}

$user = new User('Bob');
echo $user->name;







?>
</pre>