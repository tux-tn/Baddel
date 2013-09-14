<?php
$con=mysqli_connect("127.0.0.1","root","password"); //leave password empty if working on local with no password 


// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Create database
$sql="CREATE DATABASE baddal";
if (mysqli_query($con,$sql))
  {
  echo "Database my_db created successfully";
  }
else
  {
  echo "Error creating database: " . mysqli_error($con);
  }
  
  
  $con=mysqli_connect("127.0.0.1","root","password","baddal");  //leave password empty if working on local with no password 
  
  
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Create table
$sql="CREATE TABLE IF NOT EXISTS `users` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PWD` varchar(50) NOT NULL,
  `Depart` varchar(20) NOT NULL,
  `Arive` varchar(20) NOT NULL,
  `Notes` varchar(300) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";

// Execute query
if (mysqli_query($con,$sql))
  {
  echo "Table  created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }
  
  $sql2="INSERT INTO `users` (`Id`, `Nom`, `Prenom`, `Email`, `PWD`, `Depart`, `Arive`, `Notes`) VALUES
(1, 'Mouldi', 'Testeur', 'Mouldi@test.com', 'ffa6706ff2127a749973072756f83c532e43ed02', '1a1', '1a2', ' Note de test ')";

if (mysqli_query($con,$sql2))
  {
  echo "Added successfully";
  }
else
  {
  echo "Error adding data: " . mysqli_error($con);
  }

?>