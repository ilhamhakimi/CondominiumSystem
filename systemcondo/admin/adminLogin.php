<?php
session_start();
?>
<html>  
<head>  
    <title>Log Masuk Admin Prima Duta</title> 
    <link rel = "stylesheet" type = "text/css" href = "login.css">   
</head>  
<body>  
    <div id = "frm">  
        <h1>Login</h1>  
        <form name="login" action="accountAuth.php" onsubmit = "return validation()" method="POST">  
            <p>  
                <label> admin ID: </label>  
                <input type = "text" id ="adminid" name  = "adminid" autocomplete="off"/> 
				<div id="adminid_error">Please fill in your Admin ID</div>
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
                var adminid=document.login.user.value;  
                var password=document.login.pass.value;  
				
				var adminid_error = document.login['adminid'];
				var password_error = document.login['password'];
				var adminid_error = document.getElementById('adminid_error');
				var password_error = document.getElementById('password_error');
				
				if (adminid.value.length < 20){
					adminid.style.border = "1px solid red";
					adminid_error.style.display = "block";
					adminid.focus();
					return false;
				}
				
				if (password.value.length < 20){
					password.style.border = "1px solid red";
					password_error.style.display = "block";
					password.focus();
					return false;
				
                if(adminid.length=="" && password.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(adminid.length=="") {  
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
			adminid.addEventListener('textInput', adminid_Verify);
			password.addEventListener('textInput', password_Verify);
			
			function adminid_Verify(){
				if(adminid.value.length > 0 && <= 20){
					adminid.style.border = "1px solid black";
					adminid_error.style.display = "none";
					return false;
				}
			}
			function password_Verify(){
				if(password.value.length > 0 && <= 20){
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