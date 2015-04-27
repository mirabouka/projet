<?php
require 'Personnage.php';
require 'Archer.php';

//creer nouveau objet
//$merlin = new Personnage();

//afficher l'objet
//var_dump($merlin);

//afficher la fonction objet
//var_dump($merlin->crier());

//afficher le paramètre vie de merlin
//var_dump($merlin->vie);

//appliquer la fonction regenerer
//$merlin->regenerer();


//donner un nom a merlin (une valeur)
//$merlin ->nom= "merlin";
//sinon on met:
$merlin = new Personnage("merlin");

var_dump($merlin);

//créer un nouveau personnage harry du nom "harry"
$harry = new Personnage("harry");
var_dump($harry);
$harry->vie=0;
var_dump($harry->mort());
$harry->regenerer(6);
var_dump($harry);
$merlin->regenerer(2);
var_dump($merlin);

$merlin->attaque($harry);

//utiliser la fonction get

echo $merlin-> getnom();
echo '</br> modifoo';