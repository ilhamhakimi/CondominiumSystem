<html>
<head>
<title>Update Resident</title>		
</head>
<?php

include ('Config.php');
$residentid = $_POST['residentidUpdate'];
$residentid = explode(',',$residentid ); //separate data array
foreach ($residentid as $id){
$sql = mysqli_query($connect,"select * from `resident` where residentid='$id'"); 
$row = mysqli_fetch_array($sql); 
if(isset($_POST['update'])){
  $residentid = $_POST['residentid'];
  $password = $_POST['password'];
  $block = $_POST['block'];
  $unit = $_POST['unit'];
  $name = $_POST['name'];
  $phonenumber = $_POST['phonenumber'];
  $email = $_POST['email'];

  $update = "UPDATE resident set password='$password', block='$block', unit='$unit', name='$name', phonenumber='$phonenumber', email='$email' where residentid='$residentid'";

  if(mysqli_query($connect,$update))
  {
    echo "<script>alert('Success');</script>";
    header ("Location: adminResident.php");
  }
  else
  {
    echo "<script>alert('Failed to update resident information')</script>";
  }    	
}
}
?>
<a class="btn btn-primary" href="adminResident.php">Back</a>

<h1>Edit Resident Info</h1>
<br><br>
<form method="POST">
        ResidentID :  <input type="text" name="residentid" value="<?php echo $row['residentid'] ?>" readonly><br><br>
        Password : <input type="text" name="password" value="<?php echo $row['password'] ?>"><br><br>
        Block : <input type="text" name="block" value="<?php echo $row['block'] ?>"><br><br>
        Unit : <input type="text" name="unit" value="<?php echo $row['unit'] ?>"><br><br>
        Name : <input type="text" name="name" value="<?php echo $row['name'] ?>"><br><br>
        Phone Number : <input type="tel" name="phonenumber" value="<?php echo $row['phonenumber'] ?>"><br><br>
        Email : <input type="text" name="email" value="<?php echo $row['email'] ?>"><br><br>
  <input type="submit" name="update" value="Update"class="btn btn-primary">
</form>
</body>
</html>