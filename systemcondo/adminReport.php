<?php
		  	// Database connection
	$connect = new mysqli('localhost','root','','systemcondo');
	include ('Config.php');
    if(isset($_POST['delete'])){
        $delete = false;
        $email = array();
        foreach($_POST['checkbox'] as $val){
            $emails[] = (int) $val;
        }
        $emails = implode("','", $email);
        $sqld = "DELETE FROM `enquiry` WHERE email IN ('".$emails."')";
        $delete = mysql_query($sqld);
        $email = mysql_affected_rows();
        if($delete){
            echo $email." Records deleted Successfully.";
        }
    }
?>
<html>
<head>
<title>ADMIN ENQUIRY</title>
</head>
    <link rel="stylesheet" type="text/css" href="bootstrap.css" />
<body>
<div class="panel-heading text-center">
    <h1>ADMIN ENQUIRY</h1>
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
          <tr>

          <?php
$sqls = "Select * from formpendaftaran ORDER BY `formpendaftaran`.`nama` ASC";
$result = $connect-> query($sqls);

if($result-> num_rows > 1)
while ($row = $result-> fetch_assoc()){

            echo "
            <td><input name='checkbox[]' type='checkbox' id='checkbox[]' value=".$row["email"];"></td>
            <td>".$row['name']."</td>
            <td>".$row['email']."</td>
            <td>".$row['title']."</td>
            <td>".$row['descr']."</td>
            <td>".$row['phoneno']."</td>";
}
?>
</tr>
</table>
<button type="delete" class="btn btn-primary" name="delete">DELETE</button>
<button type="view" class="btn btn-primary" name="view">VIEW</button>
          </div>
    </body>
</html>