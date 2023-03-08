<?php
include ('Config.php');

@$name = $_POST['name'];
@$email = $_POST['email'];
@$phoneno = $_POST['phoneno'];
@$title = $_POST['title'];
@$descr = $_POST['descr'];


if(@$_POST['submit']){
    $sql="insert into enquiry values ('$name', '$email', '$phoneno', '$title', '$descr')";
    mysqli_query($connect, $sql);
    header ("Location: publicHomepage.php");
}else {
    echo "ERROR.";
}
$connect->close();
?>