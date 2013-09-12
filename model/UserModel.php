<?php

require_once('./Configuration.php');


/* class entreprise */

class UserModel
{
	public $Table="users";
	
	function __construct()
	{
		$Conf=new Configuration();
		$Conf->connexion();
	}
	
	
	
	function ReturnUsers()
	{
		$Tableau= array();
		$requete=" select * from ".$this->Table." ";
		$resultat =mysql_query($requete) or die ("Ereur ".mysql_error());
		$i=0;
		while ($data= mysql_fetch_array($resultat)) 
		{  
					$U = new User('','','','','','','');
					
					$U->setArive($data['Arive']);
					$U->setDepart($data['Depart']);
					$U->setEmail($data['Email']);
					$U->setId($data['Id']);
					$U->setNom($data['Nom']);
					$U->setNotes($data['Notes']);
					$U->setPrenom($data['Prenom']);
					$U->setPWD($data['PWD']);
										
					
					
					
					$Tableau[$i]=$U;
					$i++;
		}
		return $Tableau;
		
	}
	


	
	
	
function  AddUser($U)
	{		
	
		$requete="INSERT INTO ".$this->Table."  (`Nom`, `Prenom`, `Email`, `PWD`, `Depart`, `Arive`, `Notes`) 
		
		VALUES

		('".$U->getNom()."','".$U->getPrenom()."','".$U->getEmail()."','".sha1($U->getPWD())."','".$U->getDepart()."','".$U->getArive()."','".$U->getNotes()."'); ";
		
		
		mysql_query ($requete) or die ("Erreur".mysql_error());	
	}
	


function DeleteUser($Email,$PWD)
{
	$requete="DELETE FROM `users` WHERE `Email` = '".$Email."' AND `PWD` = '".sha1($PWD)."';" ;
			mysql_query ($requete) or die ("Erreur".mysql_error());	
}

function ExistePermutation($U)
{
	$Tableau= array();
		$requete="SELECT * FROM `users` WHERE `Arive` = '".$U->getDepart()."' AND `Depart` = '".$U->getArive()."' ; ";
		$resultat =mysql_query($requete) or die ("Ereur ".mysql_error());
		$i=0;
		while ($data= mysql_fetch_array($resultat)) 
		{  
					$U = new User('','','','','','','');
					
					$U->setArive($data['Arive']);
					$U->setDepart($data['Depart']);
					$U->setEmail($data['Email']);
					$U->setId($data['Id']);
					$U->setNom($data['Nom']);
					$U->setNotes($data['Notes']);
					$U->setPrenom($data['Prenom']);
					$U->setPWD($data['PWD']);
										

					$Tableau[$i]=$U;
					$i++;
		}
		return $Tableau;
}
	
	
	
	
	
	
		
	
	
	
	
		





}
/* Fin class  */




//Main
/*$liste=$EM->AfficherEntreprise();
$liste=$JM->AfficherJoueur();
*/?>


  <?php

  /*foreach ($liste as $Voi):
  echo "<tr>";
  echo "<td><center>".$Voi->getNom()."</center></td>";
  echo "<td><center>".$Voi->getPrenom()."</center></td>";
  echo "<td><center>".$Voi->getNom_Entreprise()."</center></td>";
  echo "<td><center>".$Voi->getEmail()."</center></td>";
  echo "<td><center>".$Voi->getPWD()."</center></td>";
  echo "<td><center>".$Voi->getLien_photo()."</center></td>";
  echo "<td><center>".$Voi->getDate_Inscription()."</center></td>";
  echo "<td><center>".$Voi->getDate_De_Naissance()."</center></td>";
  echo "<td><center>".$Voi->getResidence()."</center></td>";
  echo "<td><center>".$Voi->getRegion()."</center></td>";
  echo "<td><center>".$Voi->getNombre_De_Parties()."</center></td>";
  echo "<td><center>".$Voi->getTelephone()."</center></td>";
  echo "<td><center>".$Voi->getInfo()."</center></td>";
  echo "<td><center>".$Voi->getType()."</center></td>";
  echo "</tr>";
  endforeach;*/				
  ?>
<!--</table>-->