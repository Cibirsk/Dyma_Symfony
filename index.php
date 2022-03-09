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

$user2 = $user;
echo $user2->name . '<br>';

$user->name = 'BobY';
echo $user2->name . '<br>';
// echo $user->greeting() . '<br>';
// var_dump($user);

$user3 = 'Mike';
echo $user3 . '<br>';

$user4 = $user3;
$user3 = 'MikY';
echo $user4 . '<br>';