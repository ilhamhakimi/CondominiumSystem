<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="admincreateacc.css" />
   <link rel="stylesheet" type="text/css" href="adminsb.css" />
    <title>Document</title>
</head>
<body>

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
  
          </nav>
        </div>
      </nav>


      <script>
function logout() {
  if (confirm("Are you sure you want to logout?")) {
    window.location.href = "logout.php";
  }
}
</script>

      <div class="title">
        <h1>RESIDENTS ACCOUNT</h1>
      </div>

    <form class="formisi" action="admincreateacc.php" method="post">

        <div>
        <label><div class="form">Resident ID</div></label>
        <input type="text" id="residentid" name="residentid" required>
        </div>

        <div>
        <label><div class="form">Password</div></label>
        <input type="text" id="password" name="password" required>
        </div>

        <div>
        <label><div class="form">Name</div></label>
        <input type="text" id="name" name="name">
        </div>

        <div>
        <label><div class="form">Phone Number</div></label>
        <input type="text" id="phonenumber" name="phonenumber" required>
        </div>

        <div>
        <label><div class="form">Email</div></label>
        <input type="text" id="email" name="email" required>
        </div>

        <div>
        <label><div class="form">Block</div></label>
        <input type="text" id="block" name="block" required>
        </div>

        <div>
        <label><div class="form">Unit</div></label>
        <input type="text" id="unit" name="unit" required>
        </div>

        <button class = "return"><a href = "./adminResident.php">Return</a></button>
        <input type="submit" class="hantar" name="submit" required/> 
        

    </form>

    <script type="text/javascript">
        const toggleSidebar = () => document.body.classList.toggle("open");
      </script>

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
}else {
    echo "ERROR.";
}
$connect->close();
?>


    </form>
</body>
</html>