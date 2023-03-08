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
        $sqls = "Select * from enquiry ORDER BY `name` ASC";
        $result = mysqli_query($connect,$sqls);

        if($result-> num_rows > 0)
        while ($row = $result-> fetch_assoc()){
    ?>
        <tr>
            <td><input name='checkbox[]' class="checkbox" type='checkbox' id='checkbox[]' value="<?php echo $row["email"]?>"></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['title']?></td>
            <td><?php echo $row['descr']?></td>
            <td><?php echo $row['phoneno']?></td>
        </tr>
<?php
    }
?>
</table>
    <form id="formDelete" action="adminDeleteEnquiry.php" method="post">
        <input type="hidden" id="emailDelete" name="emailDelete">
    </form>
    <form id="formView" action="adminViewEnquiry.php" method="post">
        <input type="hidden" id="emailView" name="emailView">
    </form>
<button type="button" onclick="clickDelete()" class="btn btn-primary" name="delete">DELETE</button>
<button type="button" onclick="clickView()" class="btn btn-primary" name="view">VIEW</button>
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
                var emailDelete = document.getElementById('emailDelete');
                emailDelete.value = checkedValue;
                document.getElementById("formDelete").submit();
            }
        }
        function clickView() {
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
                var emailView = document.getElementById('emailView');
                emailView.value = checkedValue;
                document.getElementById("formView").submit();
            }
        }

    </script>
    </body>
</html>