
<html>
    <head>
      <title>ENQUIRY</title>
      <link rel="stylesheet" type="text/css" href="bootstrap.css" />
    </head>
    <body>
      <div class="container">
        <div class="row col-md-6 col-md-offset-3">
          <div class="panel panel-primary">
            <div class="panel-heading text-center">
              <h1>ENQUIRY</h1>
            </div>
            <div class="panel-body">
              <form action="Enquiry.php" method="post">
                <div class="form-group">
                  <label for="name">NAME</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                  />
                </div>
                <div class="form-group">
                  <label for="email">EMAIL</label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                  />
                </div>
                <div class="form-group">
                  <label for="phoneno">PHONE NUMBER</label>
                  <input
                    type="tel"
                    class="form-control"
                    id="phoneno"
                    name="phoneno"
                  />
                </div>
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
                  <label for="descr">DESCRIPTION</label><br>
                  <textarea
                    class="form-control"
                    id="descr"
                    name="descr"
                    cols="40"
                    rows="10"></textarea>
                </div>
                <input type="submit" class="btn btn-primary" name="submit"/>
              </form>
              <?php
include ('Config.php');

@$name = $_POST['name'];
@$email = $_POST['email'];
@$phoneno = $_POST['phoneno'];
@$title = $_POST['title'];
@$descr = $_POST['descr'];


if(@$_POST['submit']){
    $sql="insert into enquiry values ('$name', '$email', '$phoneno', '$title', '$descr')";
    mysqli_query($connect, $sql);
    header ("Location: publicHomepage.php");
}else {
    echo "ERROR.";
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