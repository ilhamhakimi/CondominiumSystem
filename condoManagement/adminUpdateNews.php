<?php

include ('config.php');

if(isset($_POST['submit'])){

    $no = $_POST['no'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "./uploads";
    $uploadfile = $folder . '/' . basename($_FILES['image']['name']);

    $update = "UPDATE news SET title='$title', description='$description'";
    if (!empty($filename)) {
        $update .= ", image='$filename'";
    }
    $update .= " WHERE no='$no'";

    if(mysqli_query($connect,$update)) {
        $message = "Data has been updated in the database";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("Location: adminNews.php");
        exit();
    } else {
        $message = "Failed to update data in the database: " . mysqli_error($connect);
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}

if (isset($_GET['no'])) {
    $no = $_GET['no'];
    $query = mysqli_query($connect, "SELECT * FROM news WHERE no='$no'");
    $row = mysqli_fetch_array($query);
}

?>

<html>
<head>
<title>Update News</title>        
</head>
<body>

<button class="btn btn-primary" onclick="location.href='adminNews.php'">Back</button>

<h1>Edit News Info</h1>
<br><br>
<form method="POST" enctype="multipart/form-data">
    <input type="hidden" name="no" >
    Title: <input type="text" name="title" ><br><br>
    Description: <textarea name="description"></textarea><br><br>
    
    New Image: <input type="file" name="image"><br><br>
    <input type="submit" name="submit" value="Update" class="btn btn-primary">
</form>

</body>
</html>