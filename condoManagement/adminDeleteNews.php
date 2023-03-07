<?php
    // Database connection
    include ('config.php');
    //get data from form
    $no = $_POST['noDelete'];
    $no = explode(',',$no );
    foreach($no as $id){
        $sqld = "DELETE FROM `news` WHERE no='$id'";
        $delete = mysqli_query($connect,$sqld);
        echo "<script>
            alert('".$no." Record deleted Successfully.')
            window.location='adminNews.php';
          </script>";
    }
?>