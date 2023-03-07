<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" href = "adminLogin.css">

    <title>Resident Login</title>
</head>
<body>

    <div>
        <img src="./pictures/admin.png" class="bg">
    </div>

        <div class="menu">Admin Login</div>
    
    
        <form name="login" action="accountAuthadmin.php" onsubmit = "return validation()" method="POST">

            <div>
                <label><div class="id">ID </div></label>
                <input type = "text" class ="residentid" name = "adminid" placeholder="(house unit)" autocomplete="off" required onblur="Watermark(this, event);" onfocus="Watermark(this, event);"/>
            </div> 

            <div>
                <label><div class="password"> Password </div></label>
                <input type = "password" class ="residentpass" name = "password" placeholder=" Fill your password" autocomplete="off" required onblur="Watermark(this, event);" onfocus="Watermark(this, event);"/>
            </div>

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

            <div>     
                <input type =  "submit" class = "submit" value = "Login" />  
            </div>  
</body>
</html>