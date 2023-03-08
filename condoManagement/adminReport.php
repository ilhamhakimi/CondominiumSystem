<!DOCTYPE html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "systemcondo";

// Create connection
$connect = new mysqli($servername, $username, $password, $database);

// Check connection
if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}
echo "Connected successfully";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./adminsb.css"/>
    <link rel="stylesheet" href="./admin.css"/>
    <title>Document</title>
</head>
<body>
    <style>

    </style>
    <nav class="sidebar">

<div class="sidebar-inner">

  <header class="sidebar-header">

    <button type="button" class="sidebar-burger" onclick="toggleSidebar()"></button>

    <h1 class="sidebar-logo"> LOGO </h1>
  </header>
  <nav class="sidebar-menu">

    <a href ="./adminResident.php">
    <button type="button">
      <img src="./assets/account.svg" />
      <span class="acc">Account</span>
    </button>
    </a>

    <a href ="./adminEnquiry.php">
    <button type="button">
      <img src="./assets/enquiry.svg" />
      <span class="enq">Enquiry</span>
    </button>
    </a>

    <a href = "./adminNews.php">
    <button type="button">
      <img src="./assets/news.svg" />
      <span class="news">News</span>
    </button>
    </a>

    <a href = "./adminReport.php">
    <button type="button">
      <img src="./assets/report.svg" />
      <span class="Report">Report</span>
    </button>
    </a>

    <button type="button" onclick="logout()">
            <img src="./assets/logout.svg" />
            <span class="logout">Logout</span>
          </button>
  </nav>
</div>
</nav>

<script>
function logout() {
  if (confirm("Are you sure you want to logout?")) {
    window.location.href = "logout.php";
  }
}
</script>

<!--javascript untuk buka sidebar-->
<script type ="text/javascript">
    const toggleSidebar = () => document.body.classList.toggle("open")
</script>

    <div class="title">
          <h1>REPORT</h1>
    </div>

    <div>
        <form action="./adminReport.php" method="post">
        
          
          
          
        </form>
  </div>

    <table id = "report">
          <thead> 
            <tr>
              
              <th></th>
              <th>ID</th>
              <th>Title</th>
              <th>Description</th>
              <th>Phone Number</th>
            </tr>

            
            <?php
$sqls = "SELECT * FROM report ORDER BY `residentid` DESC";
$result = mysqli_query($connect,$sqls);

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
            </thead>
          <tbody>
     </tbody>
 </table>

 <div id="pagination">
  <button class="buttprev"><a href="#" class="prev">Previous</a></button>
  <button class="buttnext"><a href="#" class="next">Next</a></button>
 <form id="formDelete" action="adminDeleteReport.php" method="post">

        <input type="hidden" id="residentidDelete" name="emailDelete">
    </form>
    <form id="formUpdate" action="adminUpdateResident.php" method="post">
        <input type="hidden" id="residentidUpdate" name="emailUpdate">
    </form>  
    
    <button type="button" onclick="clickUpdate()" class="bttnupdate" name="update">Edit</button>
    <button type="button" onclick="clickDelete()" class="bttndelete" name="delete">Delete</button>
          </div>
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

<!--NI CODE PAGINATION-->
<Script>
    // Get the table and the pagination div
var table = document.getElementById("report");
var pagination = document.getElementById("pagination");

// Get the rows of the table
var rows = table.getElementsByTagName("tr");

// Set the number of rows per page
var rowsPerPage = 5;

// Set the current page to 1
var currentPage = 1;

// Show the first set of rows
showPage(currentPage);

// Add event listeners to the prev and next buttons
pagination.getElementsByClassName("prev")[0].addEventListener("click", prevPage);
pagination.getElementsByClassName("next")[0].addEventListener("click", nextPage);

// Function to show a specific page of rows
function showPage(page) {
  // Hide all rows
  for (var i = 0; i < rows.length; i++) {
    rows[i].style.display = "none";
  }
  
  // Show the rows for the current page
  for (var i = (page - 1) * rowsPerPage; i < (page * rowsPerPage); i++) {
    if (rows[i]) {
      rows[i].style.display = "table-row";
    }
  }
}

// Function to show the previous page of rows
function prevPage() {
  if (currentPage > 1) {
    currentPage--;
    showPage(currentPage);
  }
}

// Function to show the next page of rows
function nextPage() {
  if (currentPage < rows.length / rowsPerPage) {
    currentPage++;
    showPage(currentPage);
  }
}
</Script>
<!--END CODE PAGINATION-->


<!--untuk hilangkan placeholder bila nak taip-->
<script type="text/javascript">
    function Watermark(input, event) {
        if (event.type == "focus") {
            input.setAttribute("rel", input.getAttribute("placeholder"));
            input.removeAttribute("placeholder");
        }
        if (event.type == "blur") {
            input.setAttribute("placeholder", input.getAttribute("rel"));
            input.removeAttribute("rel");
        }
    }
</script>


</body>
</html>