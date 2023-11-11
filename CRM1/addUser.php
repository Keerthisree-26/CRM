<?php
// Include your database configuration file (database.php)
include 'database.php';

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
   

    // Create the SQL query with proper variable interpolation
    $sql = "INSERT INTO roles (username, password, role) VALUES ('$username', '$password', '$role')";

    // Execute the query with a valid connection ($con)
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location: users.php');
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
    <title>Add Contact</title>
</head>
<body>
<div class="container">

<h2>Enter the Contact data:</h2>
    <form method="POST">
  <div class="form-group">
    <label>Name</label>

    <input type="text" class="form-control" name="username" aria-describedby="passwordHelp" placeholder="Enter your name">
  
  </div>
  <div class="form-group">
    <label>password</label>

    <input type="password" class="form-control" name="password" aria-describedby="passwordHelp" placeholder="Enter your password">
 
  </div>

  <div class="form-group">
    <label>role</label>

    <input type="text" class="form-control"  name="role" aria-describedby="passwordHelp" placeholder="Enter your role number">
   
  </div>


  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
</div>
</div>
</body>
</html>