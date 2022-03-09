<?php

class User
{
    public string $name = 'Jean';

    public function greeting()
    {
        return "Bonjour $this->name";
    }
}

$user = new User();
echo $user->name . '<br>';

$user->name = 'Bob';
echo $user->name . '<br>';

echo $user->greeting() . '<br>';

var_dump($user);