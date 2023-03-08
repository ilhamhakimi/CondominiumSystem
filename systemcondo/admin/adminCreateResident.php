
<html>
    <head>
      <title>Resident</title>
      <link rel="stylesheet" type="text/css" href="bootstrap.css" />
    </head>
    <body>
      <div class="container">
        <div class="row col-md-6 col-md-offset-3">
          <div class="panel panel-primary">
            <div class="panel-heading text-center">
              <h1>Resident</h1>
            </div>
            <div class="panel-body">
              <form action="adminCreateResident.php" method="post">
                <div class="form-group">
                  <label for="residentid">RESIDENT ID</label>
                  <input
                    type="text"
                    class="form-control"
                    id="residentid"
                    name="residentid"
                  />
                </div>
                <div class="form-group">
                  <label for="password">PASSWORD</label>
                  <input
                    type="text"
                    class="form-control"
                    id="password"
                    name="password"
                  />
                </div>
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
                  <label for="phonenumber">PHONE NUMBER</label><br>
                  <input
                    type="tel"
                    class="form-control"
                    id="phonenumber"
                    name="phonenumber"
                  />
                </div>
                <div class="form-group">
                  <label for="email">EMAIL</label><br>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                  />
                </div>
                <div class="form-group">
                    <label for="block">BLOCK</label><br>
                    <input
                      type="text"
                      class="form-control"
                      id="block"
                      name="block"
                      maxlength="1"
                    />
                  </div>
                  <div class="form-group">
                    <label for="unit">UNIT</label><br>
                    <input
                      type="text"
                      class="form-control"
                      id="unit"
                      name="unit"
                      maxlength="5"
                    />
                  </div>
                <input type="submit" class="btn btn-primary" name="submit"/>
              </form>
              <?php
include ('Config.php');

@$residentid = $_POST['residentid'];
@$password = $_POST['password'];
@$name = $_POST['name'];
@$phonenumber = $_POST['phonenumber'];
@$email = $_POST['email'];
@$block = $_POST['block'];
@$unit = $_POST['unit'];


if(@$_POST['submit']){
    $sql="insert into resident values ('$residentid', '$password', '$name', '$phonenumber', '$email', '$block', '$unit')";
    mysqli_query($connect, $sql);
    header ("Location: adminResident.php");
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