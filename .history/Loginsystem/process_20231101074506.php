<?php
require_once('Config.php');
?>
<?php

if(isset($_POST)){

	$Name 		    = $_POST['Name'];
	$Age		    = $_POST['Age'];
	$Gender         = $_POST['Gender'];
	$Phone	        = $_POST['Phone'];
    $HomeAddress	= $_POST['HomeAddress'];
    $Email	        = $_POST['Email'];
	$Password 		= sha1($_POST['Password']);

		$sql = "INSERT INTO passengertbl (Name, Age, Gender, Phone,Home Address,Email Password ) VALUES(?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$Name, $Age, $Gender, $Phone,$Home ,$Address,$Email, $Password ]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}