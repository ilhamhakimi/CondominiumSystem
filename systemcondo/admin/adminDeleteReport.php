<?php
    // Database connection
    $connect = new mysqli('localhost','root','','systemcondo');
    if($connect->connect_error){
        echo "$connect->connect_error";
        die("Connection Failed : ". $connect->connect_error);
        error_reporting(E_ALL);
    }
    
    $residentid = $_POST['residentidDelete'];
    $residentid = explode(',',$residentid ); //separate data array
    foreach ($residentid as $id){ //loop array
        $sqld = "DELETE FROM `report` WHERE residentid='$id'";
        $delete = mysqli_query($connect,$sqld);
        echo "<script>
            alert('".$id." Record deleted Successfully.')
          </script>";
    }
    echo "<script>
            window.location='adminReport.php';
          </script>"
?>