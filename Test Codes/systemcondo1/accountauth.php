<?php      
    require_once('config.php');  
    $residentid = $_POST['residentid'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $residentid = stripcslashes($residentid);  
        $password = stripcslashes($password);  
        $residentid = mysqli_real_escape_string($connect, $residentid);  
        $password = mysqli_real_escape_string($connect, $password);  
		
        $sql = "select * from resident where residentid = '$residentid' and password = '$password'";  
        $result = mysqli_query($connect, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        $error = "Login Unsuccesful. Incorrect Resident ID or Password or both.";
          
        if($count == 1){  
            header('Location: index.php');  
        }  
        else{
            $_SESSION["error"] = $error;
            header("location: login.php");
        }   
?>  