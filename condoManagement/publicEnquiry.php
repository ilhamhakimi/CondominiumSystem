<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');

body{
    display: flex;
}

.bg{
    position: absolute;
    background-repeat: no-repeat;
    border-radius: 50px;
    width: 50%;
    height: auto;
    right: 54%;
    top: 20%;
}

.h1{
    font-family: "Montserrat" , sans-serif;
    margin-left: 795%;
    margin-top: 60px;
}

.name{
    font-family: "Montserrat" , sans-serif;
    margin-left: 45%;
    margin-top: 10%;
    position: absolute;
    box-sizing: border-box;
    filter: drop-shadow(5px 5px 6px rgba(10, 10, 10, 0.161));
    width: 472px;
    height: 40px;
}

.email{
    font-family: "Montserrat" , sans-serif;
    margin-left: 45%;
    margin-top: 15%;
    position: absolute;
    box-sizing: border-box;
    filter: drop-shadow(5px 5px 6px rgba(10, 10, 10, 0.161));
    width: 472px;
    height: 40px;
}

.phonenum{
    font-family: "Montserrat" , sans-serif;
    margin-left: 45%;
    margin-top: 20%;
    position: absolute;
    box-sizing: border-box;
    filter: drop-shadow(5px 5px 6px rgba(10, 10, 10, 0.161));
    width: 472px;
    height: 40px;
}

.title{
    font-family: "Montserrat" , sans-serif;
    margin-left: 45%;
    margin-top: 25%;
    position: absolute;
    box-sizing: border-box;
    filter: drop-shadow(5px 5px 6px rgba(10, 10, 10, 0.161));
    width: 472px;
    height: 40px;
}

.desc{
    font-family: "Montserrat" , sans-serif;
    margin-left: 45%;
    margin-top: 30%;
    position: absolute;
    box-sizing: border-box;
    filter: drop-shadow(5px 5px 6px rgba(10, 10, 10, 0.161));
    width: 472px;
    height: 70px;
}

::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: grey;
}

.submit{
    background-color: #fcc1f2;
    padding: 9px 25px;
    border: none;
    border-radius: 15px;
    cursor: pointer;
    margin-left: 65%;
    margin-top: 35%;
    position: absolute;
}

.submit:hover{
    background-color: #f7e2f3
}

.return{
    font-family: "Montserrat" , sans-serif;
    text-decoration: none;
    position: absolute;
    font-size: medium;
    margin-left: 45.2%;
    margin-top: 35%;
  }
</style>

<body>
    
    <div>
        <img src="./pictures/pubEnq.jpg" class="bg">
    </div>

    <div>
    <h1 class="h1">Enquiry</h1>
    </div>



    <form name="enquiry" action="publicEnquiry.php" method="post">
    
    
    <div>
    <input class= "name" type="text" name="name" placeholder="Name" onblur="Watermark(this, event);" onfocus="Watermark(this, event);"/> 
    
    <input class= "email" type="text" name="email" placeholder="E-mail" onblur="Watermark(this, event);" onfocus="Watermark(this, event);"/> 

    <input class= "phonenum" type="text" name="phoneno" placeholder="Phone Number" onblur="Watermark(this, event);" onfocus="Watermark(this, event);"/>

    <input class= "title" type="text" name="title" placeholder="Title" onblur="Watermark(this, event);" onfocus="Watermark(this, event);"/>

    <input class="desc" type="text" name="descr" placeholder="Description..." onblur="Watermark(this, event);" onfocus="Watermark(this, event);"/>

    <a href = "./publicHomepage.html" class="return">Return</a>

    <input type =  "submit" name = "submit" class = "submit"/>

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

include ('config.php');

    @$name = $_POST['name'];
    @$email = $_POST['email'];
    @$phoneno = $_POST['phoneno'];
    @$title = $_POST['title'];
    @$descr = $_POST['descr'];
    
    
    if(@$_POST['submit']){
        $sql="insert into enquiry values ('$name', '$email', '$phoneno', '$title', '$descr')";
        if (mysqli_query($connect, $sql)) {
            $message = "YOUR ENQUIRY HAS BEEN INSERTED TO DATABASE";
        echo "<script type='text/javascript'>alert('$message');</script>";
        }
         else {
            $message = "YOUR ENQUIRY HAS NOT INSERTED TO DATABASE";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        }
        $connect->close();
        ?>

    
    

</body>
</html>