<pre>
<?php

class User {
  function __construct(public string $prenom, public string $nom) {}

  function direBonjour() {
    echo "Bonjour, je suis $this->prenom $this->nom. <br>";
  }
}

class Admin extends User {
  public bool $isAdmin = true;
  function __construct(string $prenom, string $nom, public bool $superadmin) {
    parent::__construct($prenom, $nom);
  }

}

$dupont = new Admin('Jean', 'Dupont', true);
$dupont->direBonjour(); // Bonjour, je suis Jean Dupont.
echo $dupont->superadmin . '<br>'; // 1

$mike = new User('Bob','Sinclar');
$mike->direBonjour();

?>
</pre>