<?php

/*  Classe Etudiant  */

class User
{
protected $Id;
protected $Nom; //commun
protected $Prenom; //commun
protected $Email; //commun
protected $PWD; //commun
protected $Depart; //commun
protected $Arive; //commun
protected $Notes; //commun


/*  Methodes GET     */
 function getId()
 { return $this->Id; }

function getNom()
{return $this->Nom;}

function getPrenom()
{return $this->Prenom;}


function getEmail()
{return $this->Email;}

function getPWD()
{return $this->PWD;}

function getDepart()
{return $this->Depart;}

function getArive()
{return $this->Arive;}

function getNotes()
{return $this->Notes;}


/* Fin des Methodes GET     */



/*  Methodes SET     */
 function setId($Id)
 { $this->Id=$Id ;}

function setNom($x)
{$this->Nom=$x;}

function setPrenom($x)
{$this->Prenom=$x;}


function setEmail($x)
{$this->Email=$x;}

function setPWD($x)
{$this->PWD=$x;}

function setDepart($x)
{$this->Depart=$x;}

function setArive($x)
{$this->Arive=$x;}

function setNotes($x)
{$this->Notes=$x;}

/* Fin des Methodes SET     */


/* Constructeur */
function __construct($Nom,$Prenom,$Email,$PWD,$Depart,$Arive,$Notes)
	{
$this->Nom = $Nom;
$this->Prenom = $Prenom;
$this->Email = $Email;
$this->PWD = $PWD;
$this->Depart = $Depart;
$this->Arive = $Arive;
$this->Notes = $Notes;
	}
/* Fin Constructeur */
}
/* Fin Class Utilisateur  */ 

?>