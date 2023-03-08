<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "resdSignUp.css">
    <title>Document</title>
</head>
<body>
<div>
        <img src="./pictures/apartment.png" class="bg">
    </div>

    <div class="menu">Sign Up</div>

    <form class="formisi" action="admincreateacc.php" method="post">

        <div>
        <label><div class="form">Resident ID</div></label>
        <input type="text" id="residentid" name="residentid" placeholder="Insert your ID using your BLOCK & UNIT (ex : A15-09)" required>
        </div>

        <div>
        <label><div class="form">Password</div></label>
        <input type="text" id="password" name="password" placeholder="Insert your password" required>
        </div>

        <div>
        <label><div class="form">Name</div></label>
        <input type="text" id="name" name="name" placeholder="Insert your full name (ALL CAPS)">
        </div>

        <div>
        <label><div class="form">Phone Number</div></label>
        <input type="text" id="phonenumber" name="phonenumber" placeholder="Insert your phone number with (-) (ex : 010-0000000)" required>
        </div>

        <div>
        <label><div class="form">Email</div></label>
        <input type="text" id="email" name="email" placeholder="Insert your email" required>
        </div>

        <div>
        <label><div class="form">Block</div></label>
        <input type="text" id="block" name="block" placeholder="Insert your residence block" required>
        </div>

        <div>
        <label><div class="form">Unit</div></label>
        <input type="text" id="unit" name="unit" placeholder="Insert your residence unit" required>
        </div>

        <input type="submit" class="hantar" name="submit" required/> 
        

        <?php

include ('config.php');

@$residentid = $_POST['residentid'];
@$password = $_POST['password'];
@$block = $_POST['block'];
@$unit = $_POST['unit'];
@$name = $_POST['name'];
@$phonenumber = $_POST['phonenumber'];
@$email = $_POST['email'];


if(@$_POST['submit']){
    $sql="insert into resident values ('$residentid', '$password', '$block', '$unit', '$name', '$phonenumber', '$email')";
    mysqli_query($connect, $sql);
    header ("Location: adminResident.php");
}else 
  
$connect->close();
?>
    </form>
</body>
</html>