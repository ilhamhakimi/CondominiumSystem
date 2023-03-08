<?php
    // Database connection
    $connect = new mysqli('localhost','root','','systemcondo');
    if($connect->connect_error){
        echo "$connect->connect_error";
        die("Connection Failed : ". $connect->connect_error);
        error_reporting(E_ALL);
    }
    //get data from form
    $email = $_POST['emailDelete'];
    $email = explode(',',$email ); //separate data array
    foreach ($email as $id){ //loop array
        $sqld = "DELETE FROM `resident` WHERE email='$id'";
        $delete = mysqli_query($connect,$sqld);
        echo "<script>
            alert('".$id." Record deleted Successfully.')
          </script>";
    }
    echo "<script>
            window.location='adminResident.php';
          </script>"
?>
