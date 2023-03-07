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

    <script type="text/javascript">
      //toggle sidebar open & close
      const toggleSidebar = () => document.body.classList.toggle("open");
    </script>

<?php 
   include ('config.php');
   if(isset($_POST['residentidUpdate'])){
       $residentid = $_POST['residentidUpdate'];
       $residentid = explode(',', $residentid); //separate data array
       foreach ($residentid as $id){
           $sql = "SELECT * FROM `resident` WHERE residentid=?";
           $stmt = mysqli_prepare($connect, $sql);
           mysqli_stmt_bind_param($stmt, 's', $id);
           mysqli_stmt_execute($stmt);
           $result = mysqli_stmt_get_result($stmt);
           $row = mysqli_fetch_array($result); 
       }
       if(isset($_POST['update'])){
           $residentid = $_POST['residentid'];
           $password = $_POST['password'];
           $block = $_POST['block'];
           $unit = $_POST['unit'];
           $name = $_POST['name'];
           $phonenumber = $_POST['phonenumber'];
           $email = $_POST['email'];
           
           $update = "UPDATE resident SET password=?, block=?, unit=?, name=?, phonenumber=?, email=? WHERE residentid=?";
           $stmt = mysqli_prepare($connect, $update);
           mysqli_stmt_bind_param($stmt, 'sssssss', $password, $block, $unit, $name, $phonenumber, $email, $residentid);
           if(mysqli_stmt_execute($stmt))
           {
               echo "<script>alert('Success');</script>";
               header ("Location: adminResident.php");
               exit();
           }
           else
           {
               echo mysqli_error($connect);
               echo "<script>alert('Failed to update resident information')</script>";
           }    	
       }
   }
?>

<form class="formisi" method="post">

    <div>
        <label><div class="form">Resident ID</div></label>
        <input type="hidden" name="residentid">
    </div>

<div>
<label><div class="form">Password</div></label>
<input type="text" name="password" value="<?php echo $row['password'] ?>" >
</div>

<div>
<label><div class="form">Name</div></label>
<input type="text" name="name" value="<?php echo $row['name'] ?>">
</div>

<div>
<label><div class="form">Phone Number</div></label>
<input type="text" name="phonenumber" value="<?php echo $row['phonenumber'] ?>">
</div>

<div>
<label><div class="form">Email</div></label>
<input type="text" name="email" value="<?php echo $row['email'] ?>">
</div>

<div>
<label><div class="form">Block</div></label>
<input type="text" name="block" value="<?php echo $row['block'] ?>" >
</div>

<div>
<label><div class="form">Unit</div></label>
<input type="text" name="unit" value="<?php echo $row['unit'] ?>">
</div>

<button class = "return"><a href = "./adminResident.php">Return</a></button>
<input type="submit" class="hantar" name="submit" /> 


</form>
    
</body>
</html>
