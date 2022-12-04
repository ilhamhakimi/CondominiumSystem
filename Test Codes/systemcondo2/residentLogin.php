<?php
session_start();
?>
    <html>

    <head>
        <title>Resident Login</title>
        
        <link rel="stylesheet" href="residentLogin.css">
    </head>

    <body>
        <form action="accountauth.php" onsubmit="return validation()" method="POST">
        <div class="residentLogin">        <div class="background39efd06c"></div>
        <div class="rectangle1"></div>
        <div class="apartmentBuildingCityWithCopySpace"></div>
        <div class="menu">WELCOME TO PRIMA DUTA</div>
        <div class="text">3 bedrooms and 3 bathrooms unit in Prima Duta Condominium. Accessibility : this place is <br />cozy and windy. Big balcony. Quiet and comfortable to live. Move in condition</div>
        <div class="login06c466bf">LOGIN</div>
        <div class="rectangle2"></div>
        <input input autofocus type = "text" class="residentid" id="residentid" name="residentid" autocomplete="off" maxlength="20"/>
        <div class="rectangle5"></div>
        <div class="id">ID</div>
        <div class="background"></div>
        <input type = "password"  class="password" id="password" name="password" autocomplete="off" maxlength="20"/>
        <div class="rectangle7"></div>
        <div class="passwordIN">PASSWORD</div>
        <div class="component21">            <div data-layer="97c72caf-73dd-40a1-90ea-ca8e661645d1" class="forgetYourPassword">Forget your password?</div>
</div>
        <div class="component41">            <div class="rectangle8"></div>
        <input type="submit" class="login" type="submit" value="Login">
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
                    alert("Resident ID and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(residentid.length=="") {  
                        alert("Resident ID is empty");  
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
				if(residentid.value.length > 0 && <= 20){
					residentid.style.border = "1px solid black";
					residentid_error.style.display = "none";
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
</div>
        <svg preserveAspectRatio="none" viewBox="11.250576972961426 6.1936492919921875 13.5029296875 23.618865966796875" class="iconIonicIosArrowBack"><path d="M 15.32109355926514 18 L 24.2578125 9.0703125 C 24.91875076293945 8.409375190734863 24.91875076293945 7.340624809265137 24.2578125 6.686718940734863 C 23.59687423706055 6.025781631469727 22.52812576293945 6.032812595367432 21.8671875 6.686718940734863 L 11.7421875 16.8046875 C 11.10234355926514 17.44453048706055 11.08828163146973 18.47109413146973 11.69296836853027 19.13203048706055 L 21.86015701293945 29.3203125 C 22.19062614440918 29.65078163146973 22.62656402587891 29.8125 23.05546951293945 29.8125 C 23.484375 29.8125 23.92031288146973 29.65078163146973 24.25078201293945 29.3203125 C 24.91172027587891 28.65937423706055 24.91172027587891 27.59062576293945 24.25078201293945 26.93671798706055 L 15.32109355926514 18 Z"  /></svg>
</div>


    
    </body>
    </html>
<?php
    unset($_SESSION["error"]);
?>            