<pre>
<?php

class User 
{
    public $isAdmin = false;

    function __construct(public $name)
    {
        
    }
}

class Admin extends User
{
    public $isAdmin = true;
}

$user = new User('Jean');
$admin = new Admin('BoB');

var_dump($user);
var_dump($admin);






?>
</pre>