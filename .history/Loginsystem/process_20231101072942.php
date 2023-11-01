<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$firstname 		= $_POST['firstname'];
	$Age		    = $_POST['Age'];
	$Gender         = $_POST['Gender'];
	$PhoneNumber	= $_POST['PhoneNumber'];
    $HomeAddress	= $_POST['HomeAddress'];
    $Email	        = $_POST['Email'];
	$Password 		= sha1($_POST['Password']);

		$sql = "INSERT INTO users (firstname, lastname, email, Phonenumber, password ) VALUES(?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$firstname, $Age	, $Gender , $Phonenumber, $password, $HomeAddress, $Email, $Password]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}