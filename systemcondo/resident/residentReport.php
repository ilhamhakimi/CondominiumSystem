
<html>
    <head>
      <title>Report</title>
      <link rel="stylesheet" type="text/css" href="bootstrap.css" />
    </head>
    <body>
      <div class="container">
        <div class="row col-md-6 col-md-offset-3">
          <div class="panel panel-primary">
            <div class="panel-heading text-center">
              <h1>Report</h1>
            </div>
            <div class="panel-body">
            <form action="residentReport.php">
                <div class="form-group">
                  <label for="title">TITLE</label><br>
                  <input
                    type="text"
                    class="form-control"
                    id="title"
                    name="title"
                  />
                </div>
                <div class="form-group">
                    <label for="block">DESCRIPTION</label><br>
                    <input
                      type="text"
                      class="form-control"
                      id="description"
                      name="description"
                    />
                  </div>
                <input type="submit" class="btn btn-primary" name="submit"/>
              </form>
              <?php
              include ('Config.php');
              include ('accountAuth.php');
              
              // Start the session
              session_start();
              if(isset($_SESSION['residentid']) && isset($_SESSION['name']) && isset($_SESSION['email'])) {
                  // The user is logged in, so we can retrieve their ID, name, and email from the session
                  $residentid = $_SESSION['residentid'];
                  $name = $_SESSION['name'];
                  $email = $_SESSION['email'];
                  $title = $_POST['title'];
                  $description = $_POST['description'];
              }
              
              if(@$_POST['submit']){
                  $sql="insert into report values ('$residentid', '$name', '$email', '$title', '$description')";
                  mysqli_query($connect, $sql);
                  header ("Location: residentHomepage.php");
                  exit();
              }else {
                  echo "ERROR.";
                  header('Location: residentHomepage.php');
                exit();
              }
              $connect->close();
              ?>
            </div>
            <div class="panel-footer text-right">
            </div>
          </div>
        </div>
      </div>
    </body>
  </html>