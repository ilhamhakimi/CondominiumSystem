<?php
include ('Config.php');

@$residentid = $_POST['residentid'];
@$password = $_POST['password'];
@$name = $_POST['name'];
@$phonenumber = $_POST['phonenumber'];
@$email = $_POST['email'];
@$block = $_POST['block'];
@$unit = $_POST['unit'];


if(@$_POST['submit']){
    $sql="insert into resident values ('$residentid', '$password', '$name', '$phonenumber', '$email', '$block', '$unit')";
    mysqli_query($connect, $sql);
    header ("Location: adminResident.php");
}else {
    echo "ERROR.";
}
$connect->close();
?>