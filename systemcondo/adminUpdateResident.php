<html>
<head>
<title>Update Resident</title>		
</head>
<?php

include "Config.php";
$email = $_POST['emailUpdate'];
$email = explode(',',$email ); //separate data array
foreach ($email as $id){
$sql = mysqli_query($connect,"select * from `resident` where email='$id'"); 
$row = mysqli_fetch_array($sql); 
if(isset($_POST['update']))
{
$residentid = $_POST['residentid'];
$password = $_POST['password'];
$name = $_POST['name'];
$phonenumber = $_POST['phonenumber'];
$email = $_POST['email'];
$block = $_POST['block'];
$unit = $_POST['unit'];

$update = "UPDATE resident set residentid='$residentid', password='$password', name='$name', phonenumber='$phonenumber', email='$email', block='$block', unit='$unit'
    where email='$id'";
	
    if(mysqli_query($connect,$update))
    {
        echo "<script>alert('Success');</script>";
        header ("Location: adminResident.php");
    }
    else
    {
        echo mysqli_error($connect);
    }    	
}
}
?>
<button class="btn btn-primary" href="adminResident.php">Back</button>

<h1>Edit Resident Info</h1>
<br><br>
<form method="POST">
        ResidentID :  <input type="text" name="residentid" value="<?php echo $row['residentid'] ?>"><br><br>
        Password : <input type="text" name="password" value="<?php echo $row['password'] ?>"><br><br>
        Name : <input type="text" name="name" value="<?php echo $row['name'] ?>"><br><br>
        Phone Number : <input type="tel" name="phonenumber" value="<?php echo $row['phonenumber'] ?>"><br><br>
        Email : <input type="text" name="email" value="<?php echo $row['email'] ?>"><br><br>
        Block : <input type="text" name="block" value="<?php echo $row['block'] ?>"><br><br>
        Unit : <input type="text" name="unit" value="<?php echo $row['unit'] ?>"><br><br>
  <input type="submit" name="update" value="Update"class="btn btn-primary">
</form>
</body>
</html>