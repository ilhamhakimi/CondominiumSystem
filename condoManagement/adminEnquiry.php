<!DOCTYPE html>

<?php
    // Database connection
    $connect = new mysqli('localhost','root','','systemcondo');
    if($connect->connect_error){
        echo "$connect->connect_error";
        die("Connection Failed : ". $connect->connect_error);
        error_reporting(E_ALL);
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Enquiry</title>

    <link rel="stylesheet" href="./adminsb.css"/>
    <link rel="stylesheet" href="./admin.css"/>
</head>
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
<h1>Enquiry</h1>
</div>  

<!-- untuk search data -->
<div>
        <form action="adminEnquiry.php" method="post">
          <input type="text" name = "valueToSearch" class = "search" required value="<?php if(isset($_GET['Search'])){echo $_GET['Search']; } ?>" class="search" placeholder="SEARCH" 
          onblur="Watermark(this, event);" onfocus="Watermark(this, event);"/>
          
          <button type="reset" class="buttreset"><a href="./adminEnquiry.php">RESET</a></button>
          <input type="submit" name="search" class="Filter" value="Filter">
          
        </form>
</div>

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

<!--untuk search data dalam table-->
<?php
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `enquiry` WHERE CONCAT(`name`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `enquiry`";
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

<!--javascript untuk buka sidebar-->
<script type ="text/javascript">
    const toggleSidebar = () => document.body.classList.toggle("open")
</script>

<table id = "enquiry">
          <thead> 
            <tr>
              
              <th></th>
              <th>Name</th>
              <th>E-mail</th>
              <th>Phone Number</th>
              <th>Title</th>
              <th>Description</th> 
            </tr>

            <?php
        $sqls = "Select * from enquiry";
        $result = mysqli_query($connect,$sqls);

        if($result-> num_rows > 0)
        while ($row = $result-> fetch_assoc()){
    ?>

          <?php while($row = mysqli_fetch_array($search_result)):?>
            <tr>
            <td><input name='checkbox[]' class="checkbox" type='checkbox' id='checkbox[]' value="<?php echo $row["email"]?>"></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['phoneno']?></td>
            <td><?php echo $row['title']?></td>
            <td><?php echo $row['descr']?></td>
        </tr>
        <?php endwhile;?>
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

 <form id="formDelete" action=".php" method="post">
        <input type="hidden" id="Delete" name="emailDelete">
    </form>
    <form id="formView" action="adminViewEnquiry.php" method="post">
        <input type="hidden" id="emailView" name="emailView">
    </form>  
    
    <button type="button" onclick="clickView()" class="bttnupdate" name="view">View</button>
    <button type="button" onclick="clickDelete()" class="bttndelete" name="delete">Delete</button>
          </div>
  </div>

  <!--NI CODE PAGINATION-->
<Script>
    // Get the table and the pagination div
var table = document.getElementById("enquiry");
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