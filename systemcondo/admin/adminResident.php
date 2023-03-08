<?php
		  	// Database connection
              include ('Config.php');
?>
<html>
<head>
<title>RESIDENT</title>
</head>
    <link rel="stylesheet" type="text/css" href="bootstrap.css" />
<body>
<div class="panel-heading text-center">
    <h1>RESIDENT</h1>
</div>
<div class="panel-body">

<a href="adminCreateResident.html"><button type="button" class="btn btn-primary">CREATE RESIDENT ACC</button></a>
<table cellspacing="0" cellpadding="6" class="table">

		  <tr bg-color="#337ab7">	
            <th style="background-color:white; border-bottom:0px;"></th>
			<th style="color: black; font-family: Trebuchet MS;">RESIDENT ID</th>
			<th style="color: black; font-family: Trebuchet MS;">PASSWORD</th>
            <th style="color: black; font-family: Trebuchet MS;">BLOCK</th>
            <th style="color: black; font-family: Trebuchet MS;">UNIT</th>
            <th style="color: black; font-family: Trebuchet MS;">NAME</th>
            <th style="color: black; font-family: Trebuchet MS;">PHONE NUMBER</th>
			<th style="color: black; font-family: Trebuchet MS;">EMAIL</th>
		  </tr>

  <?php
        $sqls = "Select * from resident ORDER BY `residentid` ASC";
        $result = mysqli_query($connect,$sqls);

        if($result-> num_rows > 0)
        while ($row = $result-> fetch_assoc()){
    ?>
        <tr>
            <td><input name='checkbox[]' class="checkbox" type='checkbox' id='checkbox[]' value="<?php echo $row["residentid"]?>"></td>
            <td><?php echo $row['residentid'] ?></td>
            <td><?php echo $row['password']?></td>
            <td><?php echo $row['block']?></td>
            <td><?php echo $row['unit']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['phonenumber']?></td>
            <td><?php echo $row['email']?></td>
        </tr>
<?php
    }
?>
</table>
    <form id="formDelete" action="adminDeleteResident.php" method="post">
        <input type="hidden" id="residentidDelete" name="residentidDelete">
    </form>
    <form id="formUpdate" action="adminUpdateResident.php" method="post">
        <input type="hidden" id="residentidUpdate" name="residentidUpdate">
    </form>
<button type="button" onclick="clickDelete()" class="btn btn-primary" name="delete">DELETE</button>
<button type="button" onclick="clickUpdate()" class="btn btn-primary" name="update">EDIT</button>
          </div>
    <script>
        function clickDelete() {
            var checkedValue = [];
            var inputElements = document.getElementsByName('checkbox[]');
            for(var i=0; inputElements[i]; ++i){
                if(inputElements[i].checked){
                    checkedValue.push(inputElements[i].value);
                }
            }
            if(checkedValue.length < 1){
                alert('Please tick at least one checkbox');
            }
            else{
                var emailDelete = document.getElementById('residentidDelete');
                emailDelete.value = checkedValue;
                document.getElementById("formDelete").submit();
            }
        }
        function clickUpdate() {
            var checkedValue = [];
            var inputElements = document.getElementsByName('checkbox[]');
            for(var i=0; inputElements[i]; ++i){
                if(inputElements[i].checked){
                    checkedValue.push(inputElements[i].value);
                }
            }
            if(checkedValue.length < 1){
                alert('Please tick at least one checkbox');
            }else{
                var emailUpdate = document.getElementById('residentidUpdate');
                emailUpdate.value = checkedValue;
                document.getElementById("formUpdate").submit();
            }
        }

    </script>
    </body>
</html>