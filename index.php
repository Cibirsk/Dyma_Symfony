<?php

class User 
{
    public $isAdmin = false;

    function __construct(public $name)
    {
        
    }
}


$user = new User();