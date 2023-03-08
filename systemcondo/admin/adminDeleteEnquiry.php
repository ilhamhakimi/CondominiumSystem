<?php
    // Database connection
    $include ('Config.php');
    //get data from form
    $email = $_POST['emailDelete'];
    $email = explode(',',$email ); //separate data array
    foreach ($email as $id){ //loop array
        $sqld = "DELETE FROM `enquiry` WHERE email='$id'";
        $delete = mysqli_query($connect,$sqld);
        echo "<script>
            alert('".$id." Record deleted Successfully.')
          </script>";
    }
    echo "<script>
            window.location='adminEnquiry.php';
          </script>"
?>