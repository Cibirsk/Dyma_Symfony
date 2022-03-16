<pre>
<?php

abstract class Greeting 
{
    function setFirstName($value)
    {
        $this->firstName = $value;
    }

    function getFirstName() 
    {
        return $this->firstName;
    }

    function setLastName($value)
    {
        $this->lastName = $value;
    }

    function getLastName() 
    {
        return $this->lastName;
    }
    
    abstract function greeting();
}

class User extends Greeting
{

}

class Admin extends Greeting
{

}

?>
</pre>