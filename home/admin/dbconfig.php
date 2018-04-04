<!-- AUTHOR:
  -BACK END :
              - CHRISTIAN SHEVA ALEXANDER
              - VITO RADITYA FAUZAN
  -FRONT END : 
              -ALDIAN FEBRIYANTO
              -FARIZ AZHAR KHALIED
              
  SMK BAKTI IDHATA 
-->

<?php

$DBhost = "localhost";
$DBuser = "root";
$DBpass = "";
$DBname = "magang";

$conn = mysqli_connect($DBhost,$DBuser,$DBpass,$DBname) or die("Connection failed: ".mysqli_connect_error());

try{

	$DBcon = new PDO("mysql:host=$DBhost;dbname=$DBname",$DBuser,$DBpass);
	$DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $ex){

	die($ex->getMessage());
}

if (mysqli_connect_errno()) {
	echo "Connect failed: ". mysqli_connect_error();
	exit();
}
	
?>