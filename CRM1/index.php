<?php
session_start();
?>


<?php
$conn=mysqli_connect("localhost","root","root","crm");
if(isset($_POST['SUBMIT'])){
    $query = mysqli_query($conn,"SELECT * FROM roles WHERE username='" . $_POST['username'] . "' AND password='" . $_POST['password'] . "'");

    if(mysqli_num_rows($query)>0){
        $_SESSION['username'] = $_POST['username'];
        header("Location: sidebar.php"); 
    }else
    {
        echo"<h1>Invalid login! try again</h1>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM Login</title>
    <link rel="stylesheet" href="login.css">

</head>
<body id="LoginForm">
<div class="container">
<h1 class="form-heading">login Form</h1>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Admin Login</h2>
   <p>Please enter your Username and Password</p>
   </div>
    <form id="Login" method="post" action="index.php">

        <div class="form-group">


            <input type="text" class="form-control" id="inputName"  name="username" placeholder="Username">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">

        </div>
        <div class="forgot">
        <a href="reset.html">Forgot password?</a>
</div>
        <button type="submit" name="SUBMIT"class="btn btn-primary">Login</button>

    </form>
    </div>

</div>
</body>
</html>