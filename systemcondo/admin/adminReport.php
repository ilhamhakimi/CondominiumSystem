<?php
		  	// Database connection
	include ('Config.php');
?>
<html>
<head>
<title>ADMIN REPORT</title>
</head>
    <link rel="stylesheet" type="text/css" href="bootstrap.css" />
<body>
<div class="panel-heading text-center">
    <h1>ADMIN REPORT</h1>
</div>
<div class="panel-body">
<table cellspacing="0" cellpadding="6" class="table">

		  <tr bg-color="#337ab7">	
            <th style="background-color: white; border-bottom:0px;"></th>
			<th style="color: black; font-family: Trebuchet MS;">ID</th>
            <th style="color: black; font-family: Trebuchet MS;">TITLE</th>
            <th style="color: black; font-family: Trebuchet MS;">DESCRIPTION</th>
            <th style="color: black; font-family: Trebuchet MS;">PHONE NUMBER</th>
		  </tr>
          <tr>

          <?php
$sqls = "Select * from report ORDER BY `report`.`title` ASC";
$result = $connect-> query($sqls);

if($result-> num_rows > 0)
while ($row = $result-> fetch_assoc()){
?>
<tr>
            <td><input name='checkbox[]' type='checkbox' id='checkbox[]' value=".$row['residentid'];"></td>
            <td><?php echo $row['residentid']?></td>
            <td><?php echo $row['title']?></td>
            <td><?php echo $row['descr']?></td>
            <td><?php echo $row['phonenumber']?></td>
</tr>
<?php
}
?>
</tr>
</table>
<form id="formDelete" action="adminDeleteReport.php" method="post">
        <input type="hidden" id="residentidDelete" name="residentidDelete">
    </form>
    <form id="formUpdate" action="adminViewReport.php" method="post">
        <input type="hidden" id="residentidView" name="residentidView">
    </form>
<button type="delete" onclick="clickDelete()" class="btn btn-primary" name="delete">DELETE</button>
<button type="view" onclick="clickView()" class="btn btn-primary" name="view">VIEW</button>
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
                var residentidDelete = document.getElementById('residentidDelete');
                residentidDelete.value = checkedValue;
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
                var residentidView = document.getElementById('residentidView');
                residentidView.value = checkedValue;
                document.getElementById("formUpdate").submit();
            }
        }

    </script>
    </body>
</html>