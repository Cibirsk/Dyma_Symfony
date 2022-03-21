<pre>
<?php

require __DIR__ . "/lib/models/User.php";
require __DIR__ . "/lib/models/Email.php";
use Dyma\models\User;  //antislash pour indiquer le namespace
use Dyma\models\Email;

$user = new User(); 
$email = new Email();

?>
</pre>