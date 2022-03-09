<?php

class User
{
    // public $name;
    // public $age;
    public function __construct(public $name, public $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

$user = new User('Mike', 29);
echo $user->name . '<br>';
echo $user->age . '<br>';

// var_dump($user);
