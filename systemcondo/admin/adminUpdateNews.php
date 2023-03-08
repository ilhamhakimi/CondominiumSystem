<?php
		  	// Database connection
              include ('Config.php');
?>
<html>
<head>
<title>NEWS</title>
</head>
    <link rel="stylesheet" type="text/css" href="bootstrap.css" />
<body>
<div class="panel-heading text-center">
    <h1>NEWS</h1>
</div>
<div class="panel-body">
<?php

include "Config.php";
$no = $_POST['noUpdate'];
$no = explode (',',$no);
foreach ($no as $id){
$sql = mysqli_query($connect,"select * from `news` where no='$id'"); 
$row = mysqli_fetch_array($sql); 
if(isset($_POST['update'])){
    $title = $connect->real_escape_string($_POST['title']);
    $description = $connect->real_escape_string($_POST['description']);
    $image = $connect->real_escape_string(file_get_contents($_FILES['image']['tmp_name']));
    
    if($tempname != "")
    {
        move_uploaded_file($tempname , "name/$filename");
        $update = "UPDATE news set title='$title', description='$description', image='$image' where no='$no'"; 
    }else
    {
        $update = "UPDATE news set title='$title', description='$description' where no='$no'";
    }

    if(mysqli_query($connect,$update))
    {
        echo "<script>alert('Success');</script>";
        header ("Location: adminNews.php");
    }
    else
    {
        echo mysqli_error($connect);
        echo "<script>alert('Failed to update resident information')</script>";
    }    	
}
}
?>
<a href="adminNews.php"><button type="button" class="btn btn-primary">Back</button></a>
<table cellspacing="0" cellpadding="6" class="table">

<h1>Edit News Feed Info</h1>
<br><br>
<form method="POST">
        <input hidden type="text" name="no" value="<?php echo $row['no'] ?>"> <br><br>
        Title :  <input type="text" name="title" value="<?php echo $row['title'] ?>"><br><br>
        Description : <input type="text" name="description" value="<?php echo $row['description'] ?>"><br><br>
        <input type="file" name="image" value="<?php echo $row['image'] ?>"><br><br>
  <input type="submit" name="update" value="Update"class="btn btn-primary">
</form>
</div>
    </body>
</html>