<?php
		  	// Database connection
              include ('Config.php');
?>
<html>
<head>
<title>ENQUIRY</title>
</head>
    <link rel="stylesheet" type="text/css" href="bootstrap.css" />
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
            <td><?php echo $row['title']?></td>
        </tr><tr>
            <td><?php echo $row['descr']?></td>
        </tr><tr>
            <td><?php echo $row['phoneno']?></td>
        </tr>
<?php
    }
?>
</table>
    </body>
</html>
