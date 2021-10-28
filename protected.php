<?php
class ClasseMere
{
  protected $attributProtege;
  private $_attributPrive;
   
  public function __construct()
  {
    $this->attributProtege = 'Hello world !';
    $this->_attributPrive = 'Bonjour tout le monde !';
  }
}
 
class ClasseFille extends ClasseMere
{
  public function afficherAttributs()
  {
    echo $this->attributProtege; // L'attribut est prot�g�, on a donc acc�s � celui-ci.
    echo $this->_attributPrive; // L'attribut est priv�, on n'a pas acc�s celui-ci, donc rien ne s'affichera (mis � part une notice si vous les avez activ�es).
  }
}
 
$obj = new ClasseFille;
 
//echo $obj->attributProtege; // Erreur fatale.
//echo $obj->_attributPrive; // Rien ne s'affiche (ou une notice si vous les avez activ�es).
 
$obj->afficherAttributs(); // Affiche � Hello world ! � suivi de rien du tout ou d'une notice si vous les avez activ�es.
?>