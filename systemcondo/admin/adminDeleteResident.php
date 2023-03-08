<?php
    // Database connection
    include ('Config.php');
    //get data from form
    $residentid = $_POST['residentidDelete'];
    $residentid = explode(',',$residentid ); //separate data array
    foreach ($residentid as $id){ //loop array
        $sqld = "DELETE FROM `resident` WHERE residentid='$id'";
        $delete = mysqli_query($connect,$sqld);
        echo "<script>
            alert('".$id." Record deleted Successfully.')
          </script>";
    }
    echo "<script>
            window.location='adminResident.php';
          </script>"
?>