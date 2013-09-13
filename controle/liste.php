<?php
require_once('../model/UserModel.php');
require_once('../Entite/User.php');

$UM = new UserModel();
$liste = $UM->ReturnUsers();

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