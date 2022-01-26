<?php

session_start();
header('location:index.php');

$con = mysqli_connect('localhost','root');



	mysqli_select_db($con,'formularz');


	$username = mysqli_real_escape_string($con, $_REQUEST['username']);

	$email = mysqli_real_escape_string($con, $_REQUEST['email']);


	$check = "select * from dane where user='$username' && email='$email' ";
	$resultcheck = mysqli_query($con,$check);	

	 $rzad = mysqli_num_rows($resultcheck);
			if($rzad == 1){
			
				
			}	else{

				$x = "insert into dane(user, email) values ('$username', '$email')"  ;

				$zapis = mysqli_query($con,$x);

			}



?>
