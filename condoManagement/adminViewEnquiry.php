<?php
		  	// Database connection
	$connect = new mysqli('localhost','root','','systemcondo');
	if($connect->connect_error){
		echo "$connect->connect_error";
		die("Connection Failed : ". $connect->connect_error);
        error_reporting(E_ALL);
    }
?>
<html>
<head>
<title>ENQUIRY</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<body>
<div class="panel-heading text-center">
    <h1>ENQUIRY</h1>
</div>
<div class="panel-body">
<table cellspacing="0" cellpadding="6" class="table">

		  <tr bg-color="#337ab7">	
            <th style="background-color:white; border-bottom:0px;"></th>
			<th style="color: white; font-family: Trebuchet MS;">NAME</th>
			<th style="color: white; font-family: Trebuchet MS;">EMAIL</th>
            <th style="color: white; font-family: Trebuchet MS;">TITLE</th>
            <th style="color: white; font-family: Trebuchet MS;">DESCRIPTION</th>
			<th style="color: white; font-family: Trebuchet MS;">PHONE NUMBER</th>
		  </tr>
  <?php
        $email = $_POST['emailView'];
        $email = explode(',',$email ); //separate data array
        foreach ($email as $id){ //loop array
            $sqls = "select * FROM `enquiry` WHERE email='$id'";
            $result = mysqli_query($connect,$sqls);
        }
        if($result-> num_rows > 0)
        while ($row = $result-> fetch_assoc()){
    ?>
        <tr>
            <td><?php echo $row['name']?></td>
        </tr><tr>
            <td><?php echo $row['email']?></td>
        </tr><tr>
            <td><?php echo $row['phoneno']?></td>
        </tr><tr>
            <td><?php echo $row['title']?></td>
        </tr><tr>
            <td><?php echo $row['descr']?></td>
        </tr>
<?php
    }
?>
</table>
    </body>
</html>
