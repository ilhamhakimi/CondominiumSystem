<?php      
    require_once('config.php');  
    $adminid = $_POST['adminid'];  
    $password = $_POST['password'];  
       
		
        $sql = "select * from admin where adminid = '$adminid' and password = '$password'";  
        $result = mysqli_query($connect, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header('Location: adminResident.php');  
        }  
        else{
            $_SESSION["error"] = $error;
            header("location: adminLogin.php");
        }   
?>  