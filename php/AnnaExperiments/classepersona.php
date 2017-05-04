<?php 
class Persona {
  private $nom;
  private $pCognom;
  private $sCognom;
  private $dni;
  private $edat;
  private $genere;
  private $estatCivil;
  private $estatLaboral;
  public function __construct($nom, $pCognom, $sCognom, $dni, $edat, $genere, $estatCivil, $estatLaboral)
  {
    $this->nom = $nom;
    $this->pCognom = $pCognom;
    $this->sCognom = $sCognom;
    $this->dni = $dni;
    $this->edat = $edat;
    $this->genere = $genere;
    $this->estatCivil = $estatCivil;
    $this->estatLaboral = $estatLaboral;
  }

  public function getNom()
  {
    return $this -> nom;
  }
  public function getPCognom()
  {
    return $this -> pCognom;
  }

  public function getSCognom()
  {
    return $this -> sCognom;
  }

  public function getDni()
  {
    return $this -> dni;
  }

  public function getEdat()
  {
    return $this -> edat;
  }

  public function getGenere()
  {
    return $this -> genere;
  }

  public function getEstatCivil()
  {
    return $this -> estatCivil;
  }

  public function getEstatLaboral()
  {
    return $this -> estatLaboral;
  }

  public function imprimirCadena()
  {
  	return '<p style="padding:3px" >'.$this->nom.' '.$this->pCognom.' '.$this->sCognom.'. DNI: '.$this->dni.'. Edat: '.$this->edat.' i genere '.$this->genere.'. L\'estat civil es '.$this->estatCivil.'. L\'estat laboral es '.$this->estatLaboral.'.</td>';
  }

}
$person1 = new Persona("Anna", "Senen", "Orts", "73391837X", 26, "Femeni", "Soltera", "Aturada");
echo $person1->imprimirCadena();