<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" href = "residentLogin.css">

    <title>Resident Login</title>
</head>
<body>

    <div>
        <img src="./pictures/apartment.png" class="bg">
    </div>

        <div class="menu">Welcome!</div>
    
    
        <form name="login" action="accountAuth.php" onsubmit = "return validation()" method="POST">

            <div>
                <label><div class="id">ID </div></label>
                <input type = "text" class ="residentid" name = "residentid" placeholder="Insert your ID using your BLOCK & UNIT (ex : A15-09)" autocomplete="off" required onblur="Watermark(this, event);" onfocus="Watermark(this, event);"/>
            </div> 

            <div>
                <label><div class="password"> Password </div></label>
                <input type = "password" class ="residentpass" name = "password" placeholder=" Insert your password" autocomplete="off" required onblur="Watermark(this, event);" onfocus="Watermark(this, event);"/>
            </div>

            <div>     
                <input type =  "submit" class = "submit" value = "Login" />  
            </div>  

        </form>

        <script type="text/javascript">
    function Watermark(input, event) {
        if (event.type == "focus") {
            input.setAttribute("rel", input.getAttribute("placeholder"));
            input.removeAttribute("placeholder");
        }
        if (event.type == "blur") {
            input.setAttribute("placeholder", input.getAttribute("rel"));
            input.removeAttribute("rel");
        }
    }
    </script>

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