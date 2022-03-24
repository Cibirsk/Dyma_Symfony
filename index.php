<pre>
<?php

spl_autoload_register(function($className){
    echo $className;
    exit;
});

$db = new DataBase();

?>
</pre>