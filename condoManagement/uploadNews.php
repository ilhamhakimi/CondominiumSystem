<?php 
include('./config.php');
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="title">
        <h1>UPDATE NEWS</h1>
      </div>
			<div>
			<form class="formisi" method="post" enctype="multipart/form-data">

			<div>
	  		<label class="file" for="image">Select an image to upload:</label><br><br>
			<input class="fileimage" type="file" name="file"><br><br>
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
if (isset($_POST['submit'])) {
$title = $_POST['title'];
$description = $_POST['description'];

$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

//kalau tak lepas cuba delete submit 
if(!empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $connect ->query("INSERT INTO news (title,description, file)
            VALUES ('$title','$description', ' $filename')");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

}
// Display status message
echo $statusMsg;
?>
</body>
</html>