<?php
if(!@file_exists('/Entite/User.php') ) {
    echo 'can not include';
} else {
   include('/Entite/User.php');
}
if(!@file_exists('../Entite/User.php') ) {
    echo 'can not include 2';
} else {
   include('../Entite/User.php');
}

if(!@file_exists('/model/UserModel.php') ) {
    echo 'can not include 11';
} else {
   include('/model/UserModel.php');
}

if(!@file_exists('../model/UserModel.php') ) {
    echo 'can not include 22';
} else {
   include('../model/UserModel.php');
}

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