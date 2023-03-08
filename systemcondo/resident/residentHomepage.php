<!DOCTYPE html>
<?php 

session_start();
include ('Config.php'); 
if (isset($_SESSION['residentid'])){
?>
<html>
<title>Sistem Kondominium Prima Duta</title>
<style>
	body{
	background-color:black;
	}
	h2{
	color:white;
	}
	p{
	color:white;
	}
</style>
<head>
</head>
<body>
	<center><h2>Sistem Kondominium Prima Duta</h2></center>
	<center><p>Selamat Datang ke Kondominium Prima Duta</p></center>
	<center><p><?php echo $_SESSION['residentid']?></p></center>
	<center><table>
	<tr>
	<td><a href="../public/publicHomepage.php"><button type="button">Log Keluar Residen</button></a></td>
	</tr>
	<tr>
	<td><a href="residentReport.html"><button type="button">Report</button></a></td>
	</tr>
	</table></center>
</body>
</html>
<?php
}else{
	header("Location: ./systemcondo/public/Login.php");
	exit();
}
?>