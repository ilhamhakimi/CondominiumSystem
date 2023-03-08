<!--<!DOCTYPE html>
<?php
include ('config.php');
?>
<html>
  <head>
    <title>Table Display Page</title>
    <style>
      /* Add some basic styling to the table */
      table {
        border-collapse: collapse;
        width: 100%;
      }
      
      table, th, td {
        border: 1px solid black;
      }
      
      th, td {
        padding: 10px;
        text-align: left;
      }
      
      /* Hide the edit form initially */
      #edit-form {
        display: none;
      }
    </style>
  </head>
  
  <body>
    <h1>Table Display Page</h1>
    
    <!-- Add a table with the necessary columns -->
    <table>
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
              <th>Action</th>
    </tr>
      </thead>
      <?php
        $sqls = "Select * from resident ORDER BY `residentid` ASC";
        $result = mysqli_query($connect,$sqls);

        if($result-> num_rows > 0)
        while ($row = $result-> fetch_assoc()){
       ?>
            <tr>
            <td><input name='checkbox[]' class="checkbox" type='checkbox' id='checkbox[]' value="<?php echo $row["email"]?>"></td>
            <td><?php echo $row['residentid'] ?></td>
            <td><?php echo $row['password']?></td>
            <td><?php echo $row['block']?></td>
            <td><?php echo $row['unit']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['phonenumber']?></td>
            <td><?php echo $row['email']?></td>
            <td><button onclick="editRow(this)">Edit</button>
          </td>
        </tr>
        <?php
        include 'updateResd.php';
    }
?>
        <!-- Add more rows as needed -->
      </tbody>
    </table>
    
    <!-- Add a batch delete button and an edit form -->
    <div id="edit-form">
      <h2>Edit Row</h2>
      <form onsubmit="saveChanges(); return false;">
        <label>Resident ID:</label>
        <input type="text" id="edit-residentid">
        <br>
        <label>Password :</label>
        <input type="text" id="edit-password">
        <br>
        <label>Block :</label>
        <input type="text" id="edit-block">
        <br>
        <br>
        <label>Unit :</label>
        <input type="text" id="edit-unit">
        <br>
        <br>
        <label>Name :</label>
        <input type="text" id="edit-name">
        <br>
        <br>
        <label>Phone Number :</label>
        <input type="text" id="edit-phonenumber">
        <br>
        <br>
        <label>E-mail :</label>
        <input type="text" id="edit-email">
        <br>

        <button type="submit">Save Changes</button>
        <button onclick="cancelEdit()">Cancel</button>
      </form>
    </div>

    <form id="formDelete" action="adminDeleteResident.php" method="post">
        <input type="hidden" id="emailDelete" name="emailDelete">
    </form>

    <button type="button" onclick="clickDelete()" class="bttndelete" name="delete">Delete</button>

    
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

    <!-- Add some JavaScript to handle the editing and deleting -->
    <script>
     function editRow(button) {
  // Get the row that corresponds to the clicked button
  var row = button.parentNode.parentNode;
  
  // Get the data for the row
  var residentid = row.cells[1].textContent;
  var password = row.cells[2].textContent;
  var block = row.cells[3].textContent;
  var unit = row.cells[4].textContent;
  var name = row.cells[5].textContent;
  var phonenumber = row.cells[6].textContent;
  var email = row.cells[7].textContent;
  
  
  // Prompt the user for new data
  var newresdid = prompt("Enter a new Resident ID:", residentid);
  var newpassword = prompt("Enter a new Password :", password);
  var newblock = prompt("Enter a new Block:", block);
  var newunit = prompt("Enter a new Unit:", unit);
  var newname = prompt("Enter a new Name:", name);
  var newphonenumber = prompt("Enter a new phone number:", phonenumber);
  var newemail = prompt("Enter a new email:", email);

  
  // Update the row's data
  row.cells[1].textContent = newresdid;
  row.cells[2].textContent = newpassword;
  row.cells[3].textContent = newblock;
  row.cells[4].textContent = newunit;
  row.cells[5].textContent = newname;
  row.cells[6].textContent = newphonenumber;
  row.cells[7].textContent = newemail;
}
      
      
      function saveChanges() {
        // Get the form data
        var residentid = document.getElementById("edit-residentid").value;
        var password = document.getElementById("edit-password").value;
        var block = document.getElementById("edit-block").value;
        var unit = document.getElementById("edit-unit").value;
        var name = document.getElementById("edit-name").value;
        var phonenumber = document.getElementById("edit-phonenumber").value;
        var name = document.getElementById("edit-name").value;
        var email = document.getElementById("edit-email").value;
        
        // Update the row's data
        var row = document.querySelector("input[type='checkbox']:checked").parentNode.parentNode;
        row.cells[1].textContent = residentid;
        row.cells[2].textContent = password;
        row.cells[3].textContent = block;
        row.cells[4].textContent = unit;
        row.cells[5].textContent = phonenumber;
        row.cells[6].textContent = phone;
        row.cells[7].textContent = email;
        
        // Hide the edit form and show the batch delete button
        document.getElementById("edit-form").style.display = "none";
        document.getElementsByTagName("button")[0].style.display = "block";
      }
      
      function cancelEdit() {
        // Hide the edit form and show the batch delete button
        document.getElementById("edit-form").style.display = "none";
        document.getElementsByTagName("button")[0].style.display = "block";
      }
      
      function deleteSelected() {
        // Get all the checkboxes that are checked
        var checkboxes = document.querySelectorAll("input[type='checkbox']:checked");
        
        // Delete the corresponding rows
        for (var i = 0; i < checkboxes.length; i++) {
          var row = checkboxes[i].parentNode.parentNode;
          row.parentNode.removeChild(row);
        }
      }
    </script>
  </body>
</html>