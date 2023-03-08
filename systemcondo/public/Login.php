<?php
session_start();
?>
<html>  
<head>  
    <title>Log Masuk Residensi Prima Duta</title> 
    <link rel = "stylesheet" type = "text/css" href = "login.css">   
</head>  
<body>  
    <div id = "frm">  
        <h1>Login</h1>  
        <form name="login" action="accountAuth.php" onsubmit = "return validation()" method="POST">  
            <p>  
                <label> Resident ID: </label>  
                <input type = "text" id ="residentid" name  = "residentid" autocomplete="off"/> 
				<div id="residentid_error">Please fill in your Resident ID</div>
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="password" name  = "password" autocomplete="off"/>
				<div id="password_error">Please fill in your Password</div>				
            </p>  
            <p>     
                <input type =  "submit" id = "submit" value = "Login" />  
            </p>  
        </form>
        <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
                    }
                ?>  
    </div>   
    <script>  
            function validation()  
            {  
                var residentid=document.login.user.value;  
                var password=document.login.pass.value;  
				
				var residentid_error = document.login['residentid'];
				var password_error = document.login['password'];
				var residentid_error = document.getElementById('residentid_error');
				var password_error = document.getElementById('password_error');
				
				if (residentid.value.length < 20){
					residentid.style.border = "1px solid red";
					residentid_error.style.display = "block";
					residentid.focus();
					return false;
				}
				
				if (password.value.length < 20){
					password.style.border = "1px solid red";
					password_error.style.display = "block";
					password.focus();
					return false;
				
                if(residentid.length=="" && password.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(residentid.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (password.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
                }
            }
			residentid.addEventListener('textInput', residentid_Verify);
			password.addEventListener('textInput', password_Verify);
			
			function residentid_Verify(){
				if(residentid.value.length > 0 &&  20){
					residentid.style.border = "1px solid black";
					residentid_error.style.display = "none";
					return false;
				}
			}
			function password_Verify(){
				if(password.value.length > 0 &&  20){
					password.style.border = "1px solid black";
					password_error.style.display = "none";
					return false;
				}
			}
        </script>  
</body>     
</html>

<?php
    unset($_SESSION["error"]);
?>