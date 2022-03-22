<pre>
<?php

require __DIR__ . "/lib/models/User.php";
require __DIR__ . "/lib/models/Email.php";
use Dyma\models\{User, Admin, Email};  
//antislash pour indiquer le namespace et {} pour utiliser 3 classes même dans 2 fichiers différents

$user = new User(); 
$email = new Email();
$admin = new Admin();

?>
</pre>