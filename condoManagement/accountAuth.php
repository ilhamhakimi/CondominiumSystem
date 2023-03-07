<?php      
    session_start();
    include('config.php');  
    $residentid = $_POST['residentid'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $residentid = stripcslashes($residentid);  
        $password = stripcslashes($password);  
        $residentid = mysqli_real_escape_string($connect, $residentid);  
        $password = mysqli_real_escape_string($connect, $password);  
		
        $sql = "select * from resident where residentid = '$residentid' and password = '$password'";  
        $result = mysqli_query($connect, $sql); 
        
        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
            if($row['residentid']==$residentid && $row['password']==$password){
                $_SESSION['residentid'] = $row['residentid'];
                $_SESSION['auth'] = true;
                $_SESSION['auth_user'] = ['residentid' => $residentid];
            }
            header("Location: http://localhost/condoManagement/resdHomepage.php");
        }else{
            $error = "Login Unsuccesful. Incorrect Resident ID or Password or both.";
            $_SESSION["error"] = $error;
            header("location: residentLogin.php");
        }
?>  