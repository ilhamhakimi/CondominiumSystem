<?php
include ('Config.php');
?>
<html>
<head>
<title>NEWS</title>
</head>
    <link rel="stylesheet" type="text/css" href="bootstrap.css" />
<body>
<div class="panel-heading text-center">
    <h1>NEWS</h1>
</div>
<div class="panel-body">

<a href="adminCreateNews.php"><button type="button" class="btn btn-primary">CREATE NEWS</button></a>
<table cellspacing="0" cellpadding="6" class="table">
		  <tr bg-color="#337ab7">	
            <th style="background-color: white; border-bottom:0px;"></th>
			<th style="color: black; font-family: Trebuchet MS;">ID</th>
            <th style="color: black; font-family: Trebuchet MS;">TITLE</th>
			<th style="color: black; font-family: Trebuchet MS;">DESCRIPTION</th>
			<th style="color: black; font-family: Trebuchet MS;">IMAGE</th>
		  </tr>

  <?php
        $sqls = "Select * from news ORDER BY `no` ASC";
        $result = mysqli_query($connect,$sqls);

        if($result-> num_rows > 0)
        while ($row = $result-> fetch_assoc()){
    ?>
        <tr>
            <td><input name='checkbox[]' id=".$row['no']." class="checkbox" onclick="toggleImageFrame(this)" type='checkbox' id='checkbox[]' value="<?php echo $row["no"]?>"></td>
            <td><?php echo $row['no'] ?></td>
            <td><?php echo $row['title']?></td>
            <td><?php echo $row['description']?></td>
        </tr>
</table>
<?php
    }
?>
    <form id="formDelete" action="adminDeleteNews.php" method="post">
        <input type="hidden" id="noDelete" name="noDelete">
    </form>
    <form id="formUpdate" action="adminUpdateNews.php" method="post">
        <input type="hidden" id="noUpdate" name="noUpdate">
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
                var noDelete = document.getElementById('noDelete');
                noDelete.value = checkedValue;
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
                var noUpdate = document.getElementById('noUpdate');
                noUpdate.value = checkedValue;
                document.getElementById("formUpdate").submit();
            }
        }

    </script>
    </body>
</html>