<?php
require_once('./Entite/User.php');
require_once('./model/UserModel.php');
$Nom = 'test2';
$Prenom = 'testeur1';
$Email = 'test@test';
$PWD = 'bla bla';
$Depart = '1a2';
$Arive  = '1a1';
$Notes = ' test tes testt ';


$U = new User($Nom,$Prenom,$Email,$PWD,$Depart,$Arive,$Notes);


$UM = new UserModel();
$UM->AddUser($U);
$liste=$UM->ExistePermutation($U);


if (!empty($liste)) {


echo('We Have a winner !!!! <br>');

}





$liste=$UM->ReturnUsers();
//$UM->DeleteUser($Email,$PWD);






?>
<table border="1">
<?php
 foreach ($liste as $Voi):
  echo "<tr>";
  echo "<td><center>".$Voi->getNom()."</center></td>";
  echo "<td><center>".$Voi->getPrenom()."</center></td>";
  echo "<td><center>".$Voi->getEmail()."</center></td>";
  echo "<td><center> ".$Voi->getPWD()."</center></td>";
  echo "<td><center> ".$Voi->getDepart()."</center></td>";
  echo "<td><center> ".$Voi->getArive()."</center></td>";
  echo "<td><center> ".$Voi->getNotes()."</center></td>";


  echo "</tr>";
  endforeach;			
?>

</table>
