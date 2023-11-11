<?php
// Include your database configuration file (database.php)
include 'database.php';

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Get form data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $lead_reference = $_POST['lead_reference']; 
    $requirement = $_POST['requirement']; 

    // Create the SQL query with proper variable interpolation
    $sql = "INSERT INTO contacts (fullname, email, mobile, lead_reference, requirement) VALUES ('$fullname', '$email', '$mobile', '$lead_reference', '$requirement')";

    // Execute the query with a valid connection ($con)
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location: contacts.php');
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

    <input type="text" class="form-control" name="fullname" aria-describedby="emailHelp" placeholder="Enter your name">
  
  </div>
  <div class="form-group">
    <label>Email</label>

    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter your email">
 
  </div>

  <div class="form-group">
    <label>mobile</label>

    <input type="text" class="form-control"  name="mobile" aria-describedby="emailHelp" placeholder="Enter your mobile number">
   
  </div>
  <div class="form-group">
    <label>lead_reference</label>

    <input type="text" class="form-control" name="lead_reference" aria-describedby="emailHelp" placeholder="Enter your email">
 
  </div>
  <div class="form-group">
    <label>Requirement</label>

    <input type="text" class="form-control" name="requirement" aria-describedby="emailHelp" placeholder="Enter your email">
 
  </div>

  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
</div>
</div>
</body>
</html>