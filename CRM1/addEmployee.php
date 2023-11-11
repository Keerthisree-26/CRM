
<?php
// Include your database configuration file (database.php)
include 'database.php';

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Get form data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $designation = $_POST['designation']; 
    $joined_date = $_POST['joined_date']; 

    // Create the SQL query with proper variable interpolation
    $sql = "INSERT INTO staff (fullname, email, phone, designation, joined_date) VALUES ('$fullname', '$email', '$phone', '$designation', '$joined_date')";

    // Execute the query with a valid connection ($con)
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location: employees.php');
    } else {
        die(mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="addEmployee.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Add Employee</title>
</head>
<body>
<div class="container">

<h2>Enter the staff data:</h2>
    <form method="POST">
  <div class="form-group">
    <label>Name</label>

    <input type="text" class="form-control" name="fullname" aria-describedby="emailHelp" placeholder="Enter your name">
  
  </div>
  <div class="form-group">
    <label>Email</label>

    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter your email">
 
  </div>

  <div class="form-group">
    <label>phone</label>

    <input type="text" class="form-control"  name="phone" aria-describedby="emailHelp" placeholder="Enter your phone number">
   
  </div>
  <div class="form-group">
    <label>designation</label>

    <input type="text" class="form-control" name="designation" aria-describedby="emailHelp" placeholder="Enter your email">
 
  </div>
  <div class="form-group">
    <label>Joined Date</label>

    <input type="datetime-local" class="form-control" name="joined_date" aria-describedby="emailHelp" placeholder="Enter your email">
 
  </div>

  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
</div>
</body>
</html>