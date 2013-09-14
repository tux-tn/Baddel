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



$Nom = mysql_real_escape_string($_POST['Nom']);
$Prenom = mysql_real_escape_string($_POST['Prenom']);
$Email = mysql_real_escape_string($_POST['Email']);
$Depart = mysql_real_escape_string($_POST['ClasseDep']);
$Arive  = mysql_real_escape_string($_POST['ClasseDest']);

if(isset($_POST['PWD']))
{
$PWD = $_POST['PWD'];
}
else
{
	$PWD =  sha1('OP is a faggot');
}

if(isset($_POST['Notes']))
{
$Notes = mysql_real_escape_string($_POST['Notes']);
}
else
{
	$Notes = sha1('OP is a faggot');
}

$U = new User($Nom,$Prenom,$Email,$PWD,$Depart,$Arive,$Notes);

$UM = new UserModel();
$UM->AddUser($U);


$liste=$UM->ExistePermutation($U);


if (!empty($liste)) {


echo('We Have a winner !!!! <br>');

}


?>