<!DOCTYPE html>
<html>
<head>
	<title>Create News</title>
</head>
<body>
	<h1>Create News</h1>
	<form method="post" enctype="multipart/form-data">
		<label for="image">Select an image to upload:</label><br><br>
		<input type="file" name="image" id="image"><br><br>
		<label for="title">Title:</label><br><br>
		<input type="text" name="title" id="title"><br><br>
		<label for="description">Description:</label><br><br>
		<input type="textfield" name="description" id="description"><br><br>
		<input type="submit" value="Upload" name="submit">
	</form>
</body>
</html>
<?php
include ('Config.php');

if(@$_POST['submit']){
   
    $title = $_POST['title'];
    $description = $_POST['description'];
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "../image/news/";
    
    $sql = "INSERT INTO news (title, description, image) VALUES ('$title','$description', '$folder$filename')";

	if (mysqli_query($connect, $sql)) {
	    echo "New record created successfully";
	}
	if (move_uploaded_file($tempname, $folder)) {
	    echo "<h3>  Image uploaded successfully!</h3>";
	} else {
	    echo "<h3>  Failed to upload image!</h3>";
	}
}else{
	header("Location: adminCreateNews.php?error=unknown error occurred");
	}
    $connect->close();
?>