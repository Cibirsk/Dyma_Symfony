<?php

class User
{
    public $name ;

    public function __construct()
    {
        echo 'construct call' . '<br>';
    }
}

$user = new User();
$user->name = 'Bob';
echo $user->name . '<br>';

// echo $user->greeting() . '<br>';
// var_dump($user);
