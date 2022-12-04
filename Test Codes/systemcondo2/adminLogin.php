<?php
session_start();
?>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Admin Login</title>
        
        <link rel="stylesheet" href="adminLogin.css">
    </head>

    <body>
        <form action="adminaccountauth.php" onsubmit="return validation()" method="POST">
        <div data-layer="3291f65a-e495-439c-9ae6-0b7e6303831c" class="adminLogin">        <div data-layer="37e8a8b3-2eca-41c2-b9b2-7325bfa3df51" class="backgrounddcd05963"></div>
        <div data-layer="3b79b5d7-dd7d-44d0-8641-295522e8c753" class="rectangle1"></div>
        <div data-layer="d4837cdc-e497-4f2f-adda-37f5815adca1" class="menu">ADMIN MANAGEMENT</div>
        <div data-layer="636bdb5e-0671-4ba2-b8e0-d442176ae2a6" class="login3dde9356">LOGIN</div>
        <div data-layer="a8730b32-36ea-439b-899a-afa1aa90531b" class="rectangle2"></div>
        <input input autofocus type = "text" class="adminid" id="adminid" name="adminid" autocomplete="off" maxlength="20"/>
        <div data-layer="a186d193-0dd0-4298-9c24-382a80a13521" class="rectangle5"></div>
        <div data-layer="1f7070d2-ae93-4891-a258-19f7fa0a6968" class="id">ID</div>
        <div data-layer="1a30699e-7493-43f6-aef1-fecf8d050d74" class="background"></div>
        <input type = "password"  class="password" id="password" name="password" autocomplete="off" maxlength="20"/>
        <div data-layer="89a364ad-37a5-498d-a9d3-313977ae34c6" class="rectangle7"></div>
        <div data-layer="b6fa7848-bf82-42e8-861b-50e101078a95" class="passwordIN">PASSWORD</div>
        <div data-layer="85d64be2-3593-435d-9ca6-73c9b56bfaf3" class="component42">            <div data-layer="47501734-693c-4cfc-9f66-74a452272d6a" class="rectangle8"></div>
        <input type="submit" class="login" type="submit" value="Login">
        </form></div>

        <div data-layer="d0e9bee3-1a4a-4df6-9552-bd7ec42bed9b" class="image2"></div>
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
                        alert("Admin ID is empty");  
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