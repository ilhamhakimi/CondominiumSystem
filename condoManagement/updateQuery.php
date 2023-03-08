<?php
	
	$conn = mysqli_connect("localhost", "root", "", "systemcondo");

	if(ISSET($_POST['submit'])){
			$residentid=$_POST['residentid'];
			$password = $_POST['password'];
			$block = $_POST['block'];
			$unit = $_POST['unit'];
			$name = $_POST['name'];
			$phonenumber = $_POST['phonenumber'];
			$email = $_POST['email'];
			mysqli_query($conn, "UPDATE resident SET password='$password',block='$block',unit='$unit',name='$name',phonenumber='$phonenumber',email='$email'
			WHERE residentid='$residentid'") or die(mysqli_error());			

		header("location: adminResident.php");
	}
?>