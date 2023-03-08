<?php
		  	// Database connection
              include ('Config.php');
?>
<html>
<head>
<title>REPORT</title>
</head>
    <link rel="stylesheet" type="text/css" href="bootstrap.css" />
<body>
<div class="panel-heading text-center">
    <h1>REPORT</h1>
</div>
<div class="panel-body">
<table cellspacing="0" cellpadding="6" class="table">

		  <tr bg-color="#337ab7">	
            <th style="background-color: white; border-bottom:0px;"></th>
			<th style="color: black; font-family: Trebuchet MS;">ID</th>
			<th style="color: black; font-family: Trebuchet MS;">NAME</th>
            <th style="color: black; font-family: Trebuchet MS;">EMAIL</th>
            <th style="color: black; font-family: Trebuchet MS;">TITLE</th>
            <th style="color: black; font-family: Trebuchet MS;">DESCRIPTION</th>
            <th style="color: black; font-family: Trebuchet MS;">DATE</th>
            <th style="color: black; font-family: Trebuchet MS;">PHONE NUMBER</th>
		  </tr>
  <?php
        $residentid = $_POST['reisdentidView'];
        $residentid = explode(',',$residentid ); //separate data array
        foreach ($residentid as $id){ //loop array
            $sqls = "select * FROM `report` WHERE residentid='$id'";
            $result = mysqli_query($connect,$sqls);
        }
        if($result-> num_rows > 0)
        while ($row = $result-> fetch_assoc()){
    ?>
        <tr>
            <td><?php echo $row['residentid']?></td>
        </tr><tr>
            <td><?php echo $row['name']?></td>
        </tr><tr>
            <td><?php echo $row['email']?></td>
        </tr><tr>
            <td><?php echo $row['title']?></td>
        </tr><tr>
            <td><?php echo $row['descr']?></td>
        </tr><tr>
            <td><?php echo $row['date']?></td>
        </tr><tr>
            <td><?php echo $row['phonenumber']?></td>
        </tr>
<?php
    }
?>
</table>
    </body>
</html>
