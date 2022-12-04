<?php      
    require_once('config.php');  
    $adminid = $_POST['adminid'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $adminid = stripcslashes($adminid);  
        $password = stripcslashes($password);  
        $adminid = mysqli_real_escape_string($connect, $adminid);  
        $password = mysqli_real_escape_string($connect, $password);  
		
        $sql = "select * from admin where adminid = '$adminid' and password = '$password'";  
        $result = mysqli_query($connect, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        $error = "Login Unsuccesful. Incorrect Admin ID or Password or both.";
          
        if($count == 1){  
            header('Location: adminHomepageAccount.html');  
        }  
        else{
            $_SESSION["error"] = $error;
            header("location: adminLogin.php");
        }   
?>  