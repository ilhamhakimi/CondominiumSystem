<?php
session_start();
?>

<!DOCTYPE html>
<html>
<title>Daftar Akaun Residen Kondominium</title>
<link rel = "stylesheet" type = "text/css" href = "signup.css">
<head>
</head>
<body>
	<br><center>
	
	<h2>Daftar Akaun Residen</h2>
	<?php
	$_SESSION["start"] = "done";
	echo "session are started";
	include ('config.php');
	
	if(isset($_POST['submit'])){
	
	$residentid = $_POST['residentid'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	$phonenumber = $_POST['phonenumber'];
	
	$insert = "INSERT into resident (residentid, password, name, phonenumber) values ('$residentid','$password','$name','$phonenumber')";
	$result = mysqli_query($connect,$insert);
	
	header("location:index.php");
	}?>
	<table>
	<form method = "POST">
		<tr>
			<td><label>ResidentID : </label><br></td>
			<td><input type="int" name="residentid" maxlength="20"><br></td>
		</tr><tr>
			<td><label>Password : </label><br></td>
			<td><input type="int" name="password" maxlength="20"></td>
		</tr><tr>
			<td><label>Name : </label><br></td>
			<td><input type="text" name="name" maxlength="50"></td>
		</tr><tr>
			<td><label>Phone Number : </label><br></td>
			<td><input type="text" name="phonenumber" maxlength="15"></td>
		</tr><tr>
			<td></td>
			<td><center><input type="submit" name="submit" value="submit"><center></td>
		</tr>
	</table>
	
	</form>
	<br>
	<center>
	<a href="index.php"><button>Home</button></a><center>
</body>
</html>