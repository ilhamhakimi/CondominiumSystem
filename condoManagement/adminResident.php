<!DOCTYPE html>

<?php
$connect=mysqli_connect('localhost','root','','systemcondo') or die ('Unable to connect');
?>


<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>ADMIN MANAGEMENT</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/8f88296405.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="admin_style.css">
    <link rel="stylesheet" href="./adminsb.css" />
  
  </head>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');


.title{
  font-family: "Montserrat" , sans-serif;
  font-size: 10px;
  margin-top:75px;
  margin-left: 200px;
}

.search{
  margin-top:20px;
  margin-left: 200px;
  width: 190px;
  height: 25px;
  border-radius: 10px;
}

.Filter{
  opacity: 0;
}

.buttreset{
  width: 69px;
  height: 30px;
  margin-top:20px;
}

table{
  font-family: "Montserrat" , sans-serif;
  border-collapse: collapse;
  width: 80%;
  border: 1px solid   #ddd;
  margin-left: 200px;
  margin-right: auto;
  margin-top: 25px;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(odd) {
  background-color: #f2f2f2;
}

.buttcreate{
  width: 100px;
  height: 30px;
  border-radius: 25px;
  background-color: #fcc1f2;
  margin-top:-50px;
  margin-left: 82%;
}

.buttcreate:hover{
  background-color: #f7e2f3;
}

.buttprev{
  border-radius: 20px;
  width: 100px;
  height: 30px;
  background-color: aqua;
  margin-top: 20px;
  margin-left: 80%;
}

.buttnext{
  border-radius: 20px;
  width: 100px;
  height: 30px;
  background-color: aqua;
}


.bttndelete{
  width: 100px;
  height: 30px;
  background-color: rgb(255, 63, 63); 
  color: white; 
  border-radius: 25px;
  margin-left: 9.5%;
}

.bttndelete:hover {
  background-color: rgb(255, 134, 134);
  color: black;
}

  </style>
  <body>
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


    <div class="title">
          <h1>RESIDENTS ACCOUNT</h1>
    </div>
  <div>

        <!--HTML UNTUK KOD SEARCH BAR-->
        <form action="adminResident.php" method="post">
          <input type="text" name = "valueToSearch" class = "search" required value="<?php if(isset($_GET['Search'])){echo $_GET['Search']; } ?>" class="search" placeholder="SEARCH" 
          onblur="Watermark(this, event);" onfocus="Watermark(this, event);"/>
          
          <button type="reset" class="buttreset"><a href="./adminResident.php">RESET</a></button>
          <input type="submit" name="search" class="Filter" value="Filter">
          
        </form>
  </div>

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
  
  <input type="reset" value="reset">
        
<!--KOD UNTUK SEARCH BAR-->
        <?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `resident` WHERE CONCAT(`residentid`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `resident`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "systemcondo");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
<!--END KOD SEARCH BAR-->

        <button class = "buttcreate"><a href = "./admincreateacc.php">Create</a></button>

        <table id = "resident">
          <thead> 
            <tr>
              
              <th></th>
              <th>ID</th>
              <th>Password</th>
              <th>Block</th>
              <th>Unit</th>
              <th>Name</th> 
              <th>Phone Number</th>
              <th>Email</th>
              <th>Actions</th>
            </tr>

            <?php
        $sqls = "Select * from resident ORDER BY `residentid` ASC";
        $result = mysqli_query($connect,$sqls);

        if($result-> num_rows > 0)
        while ($row = $result-> fetch_assoc()){
       while($row = mysqli_fetch_array($search_result)):?>
            <tr>
            <td><input name='checkbox[]' class="checkbox" type='checkbox' id='checkbox[]' value="<?php echo $row["email"]?>"></td>
            <td><?php echo $row['residentid'] ?></td>
            <td><?php echo $row['password']?></td>
            <td><?php echo $row['block']?></td>
            <td><?php echo $row['unit']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['phonenumber']?></td>
            <td><?php echo $row['email']?></td>
            <td><button class="btn btn-warning" data-toggle="modal" type="button" data-target="#update_modal<?php echo $row['residentid']?>"><span class="glyphicon glyphicon-edit"></span>Edit</button>
        </tr>
        <?php 
                include 'updateResd.php';
      endwhile;

        
    }
?>
          </thead>
          <tbody>
     </tbody>
 </table>

 <div id="pagination">
  <button class="buttprev"><a href="#" class="prev">Previous</a></button>
  <button class="buttnext"><a href="#" class="next">Next</a></button>

  <form id="formDelete" action="adminDeleteResident.php" method="post">
        <input type="hidden" id="emailDelete" name="emailDelete">
    </form>
    <form id="formUpdate" action="adminUpdateResident.php" method="post">
        <input type="hidden" id="residentidUpdate" name="residentidUpdate"> 
    </form>
    
    <button type="button" onclick="clickDelete()" class="bttndelete" name="delete">Delete</button>
          </div>
  </div>

  <!--NI CODE PAGINATION-->
  <Script>
    // Get the table and the pagination div
var table = document.getElementById("resident");
var pagination = document.getElementById("pagination");

// Get the rows of the table
var rows = table.getElementsByTagName("tr");

// Set the number of rows per page
var rowsPerPage = 10;

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

 </form>

 
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
      
        

    </script>

        

    <script type="text/javascript">
      //toggle sidebar open & close
      const toggleSidebar = () => document.body.classList.toggle("open");
    </script>
  </body>
</html>