<?php
include 'database.php';
$id = $_GET['updateid'];

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve and sanitize form data
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $designation = mysqli_real_escape_string($conn, $_POST['designation']);

    $joined_date = mysqli_real_escape_string($conn, $_POST['joined_date']);// Assuming 'status' is a select field in your form

    // Form validation (you can add more validation as needed)
    $errors = [];
    if (empty($fullname)) {
        $errors[] = "Name is required";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required";
    }

    // Check if there are any validation errors
    if (empty($errors)) {
        // Corrected SQL query
        $sql = "UPDATE `leads` SET fullname='$fullname', email='$email', phone='$phone', designation='$designation',   joined_date='$joined_date' WHERE id='$id'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "Updated successfully";
            // Redirect to a success page if needed
            // header('location: display.php');
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    } else {
        // Display validation errors
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}

// Retrieve the existing record
$sql = "SELECT * FROM `leads` WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$fullname = $row['fullname'];
$email = $row['email'];
$phone = $row['phone'];
$designation = $row['designation'];
$joined_date = $row['joined_date'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>CRUD Operations</title>
  </head>
  <body>
    
    <div class="container">
    <form method="POST">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="fullname" value="<?php echo $fullname; ?>" placeholder="Enter your name">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="Enter your email">
        </div>
        <div class="form-group">
            <label>Mobile</label>
            <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>" placeholder="Enter your mobile number">
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="designation" value="<?php echo $designation; ?>" placeholder="Enter Address">
        </div>
        
        <div class="form-group">
    <label>Updated Time</label>
    <input type="datetime-local" class="form-control" name="joined_date" value="<?php echo $joined_date; ?>">

        <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>
    </div>
  </body>
</html>