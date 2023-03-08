<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./adminsb.css"/>
</head>
<body>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');


.title{
	position: absolute;
    font-size: 10px;
    margin-top:-15%;
    margin-right: 65.7%;
}

body {
	font-family: "Montserrat" , sans-serif;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 50vh;
	
}

.formisi{
    font-family: "Montserrat" , sans-serif;
    position: flex;
}

.inputit {
	font-family: "Montserrat" , sans-serif;
    position: absolute;
	letter-spacing: 1px;
    opacity: 1;
    border-top-width: 1.00px;
    filter: drop-shadow(5px 5px 6px rgba(10, 10, 10, 0.161));
    margin-left: -20%;
    margin-top: 5%;
    width: 792px;
    height: 40px;
  }

  .tajuk{
	font-family: "Montserrat" , sans-serif;
	position: absolute;
	margin-left: -20%;
    margin-top: 2%;
  }

  .decr{
	font-family: "Montserrat" , sans-serif;
	position: absolute;
	margin-left: -20%;
    margin-top: 10%;
  }

  .descrinp{
	font-family: "Montserrat" , sans-serif;
    position: absolute;
	letter-spacing: 1px;
    opacity: 1;
    border-top-width: 1.00px;
    filter: drop-shadow(5px 5px 6px rgba(10, 10, 10, 0.161));
    margin-left: -20%;
    margin-top: 13%;
    width: 792px;
    height: 80px;
  }

  .return{
	position: absolute;
    font-family: "Montserrat" , sans-serif;
    font-size: medium;
    margin-left: -50%;
    margin-top: 43%;
  }
  
  .hantar{
	position: absolute;
    padding: 9px 25px;
    background-color: #fcc1f2;
    border: none;
    border-radius: 15px;
    cursor: pointer;
    transition: all 0.3s ease 0s;
    margin-left: 25%;
    margin-top: 44.5%;
}

.hantar:hover{
    background-color: #f7e2f3
}

.file{
	font-family: "Montserrat" , sans-serif;
	position: absolute;
	margin-left: -12%;
    margin-top: 2%;
}

</style>
<nav class="sidebar">

<div class="sidebar-inner">

  <header class="sidebar-header">

    <button type="button" class="sidebar-burger" onclick="toggleSidebar()"></button>

    <h1 class="sidebar-logo"> LOGO </h1>
  </header>
  <nav class="sidebar-menu">

    <a href ="./adminResident.php">
    <button type="button">
      <img src="./assets/account.svg" />
      <span class="acc">Account</span>
    </button>
    </a>

    <a href ="./adminEnquiry.php">
    <button type="button">
      <img src="./assets/enquiry.svg" />
      <span class="enq">Enquiry</span>
    </button>
    </a>

    <a href = "./adminNews.php">
    <button type="button">
      <img src="./assets/news.svg" />
      <span class="news">News</span>
    </button>
    </a>
    
    <a href = "./adminReport.php">
    <button type="button">
      <img src="./assets/report.svg" />
      <span class="Report">Report</span>
    </button>
    </a>

    <button type="button" onclick="logout()">
            <img src="./assets/logout.svg" />
            <span class="logout">Logout</span>
          </button>

</div>
</nav>

<script>
function logout() {
  if (confirm("Are you sure you want to logout?")) {
    window.location.href = "logout.php";
  }
}
</script>

  <!--javascript untuk buka sidebar-->
<script type ="text/javascript">
    const toggleSidebar = () => document.body.classList.toggle("open")
</script>

<div class="title">
        <h1>UPDATE NEWS</h1>
      </div>
			<div>
			<form class="formisi" method="post" enctype="multipart/form-data">

			<div>
	  		<label class="file" for="image">Select an image to upload:</label><br><br>
			<input class="fileimage" type="file" name="image" id="image"><br><br>
	  		</div>

			<label><div class="tajuk">Title</div></label>
        	<input class = "inputit" type="text" id="title" name="title" required>

			<label><div class="decr">Description</div></label>
        	<input class="descrinp" type="textfield" id="description" name="description" required>
			</div>

			<button class = "return"><a href = "./adminNews">Return</a></button>
			<input type="submit" class="hantar" name="submit" required/>
			</form>

			
      <?php

include ('config.php');

if(@$_POST['submit']){

  $title = $_POST['title'];
  $description = $_POST['description'];
  $filename = $_FILES["image"]["name"];
  $tempname = $_FILES["image"]["tmp_name"];
  $folder = "./uploads";
  $uploadfile = $folder . '/' . basename($_FILES['image']['name']);
$sql = "INSERT INTO news (title, description, image) VALUES ('$title','$description', '$filename')";
if (mysqli_query($connect, $sql)) {
	$message = "DATA HAS BEEN INSERTED TO DATABASE";
echo "<script type='text/javascript'>alert('$message');</script>";
}
if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
    $message = "Image uploaded successfully!";
    echo "<script type='text/javascript'>alert('$message');</script>";
} else {
	$message = "IMAGE HAS NOT INSERTED TO DATABASE";
	echo "<script type='text/javascript'>alert('$message');</script>";
}
}
$connect->close();
?>
</body>
</html>