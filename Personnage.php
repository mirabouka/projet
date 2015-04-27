<?php
class Personnage{
	public $vie = 80;
	public $atk = 20;
	public $nom;

//creer la function construct des parametre pour les instancier
	public function __construct($nom){
		$this ->nom = $nom;
	}

	public function setnom(){
	 $this ->nom= $nom;
	}

	public function getnom(){
		return $this->nom;
	}


public function crier(){
	echo 'waaaa3333';
}

 public function regenerer($vie=null)
{
	if(is_null($vie)){
		$this->vie=100;
	}else{
		$this->vie += $vie;
	}

}

//fonction pour savoir si personnage est mort ou pas
 public function mort()
{
	return $this->vie <= 0;
}

//une fonction de merlin attaque harry
public function attaque($cible){

}

}