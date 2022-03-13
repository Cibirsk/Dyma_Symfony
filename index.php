<pre>
<?php

class User {

  private string $nomComplet;
  
  function __construct(private string $prenom, private string $nom) {
    $this-> nomComplet = $prenom . ' ' . $nom;
  }

  function setPrenom(string $nouveauPrenom) {
    $this->prenom = $nouveauPrenom;
    $this->nomComplet = $nouveauPrenom . ' ' . $this->nom;
  }

  function setNom(string $nouveauNom) {
    $this->nom = $nouveauNom;
    $this->nomComplet = $this->prenom . ' ' . $nouveauNom;
  }

  function getPrenom() {
    return $this->prenom;
  }

  function getNom() {
    return $this->nom;
  }

  function getNomComplet() {
    return $this->nomComplet;
  }
}

$user1 = new User('Jean', 'Dupont');
echo $user1->getNomComplet(), '<br>'; // Jean Dupont
$user1->setPrenom('Marie');
$user1->setNom('Dupuis');
echo $user1->getNomComplet(); // Marie Dupuis

?>
</pre>