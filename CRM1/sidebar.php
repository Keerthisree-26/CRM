 <?php
if (!isset($_SESSION)) {
    session_start();
} 
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles/dashboard.css">
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

 

 

 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

 

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

 

<script src="https://kit.fontawesome.com/4a71d2502b.js" crossorigin="anonymous"></script>
    <!---materail-icons-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
<div class="sidebar">
<div class="sidebar-menu">
<?php
$conn = mysqli_connect("localhost", "root", "root", "crm_db");
// echo $_SESSION['username'];

$query = mysqli_query($conn, "SELECT * FROM roles WHERE username='" . $_SESSION['username'] . "'");
while ($row = mysqli_fetch_array($query)) {
    $role = $row['role'];
}
if ($role == 'SuperAdmin') {
?>
    <h1>Main</h1>
    <ul>
        <li>
            <a href="dashboard.php" class="active">
                <span class="fa-solid fa-house fa-sm" style="color: #217273;"></span>
                <span class="names">Dashboard</span>
            </a>
        </li>
         <li>
            <a href="users.php" class="active">
                <span class="fa-solid fa-user fa-sm" style="color: #217273;"></span>
                <span class="names">users</span>
            </a>
        </li>
        <li>
            <a href="leads.php" class="active">
                <span class="fa-solid fa-list-check fa-sm" style="color: #217273;"></span>
                <span class="names">Leads</span>
            </a>
        </li>
        <li>
            <a href="staff.php" class="active">
                <span class="fa-solid fa-address-book fa-sm" style="color: #217273;"></span>
                <span class="names">Employees</span>
            </a>
        </li>
        <li>
            <a href="contacts.php" class="active">
                <span class="fa-solid fa-diagram-project fa-sm" style="color: #217273;"></span>
                <span class="names">Contacts</span>
            </a>
        </li>
        <li>
            <a href="help.php" class="active">
                <span class="fa-solid fa-bug fa-sm" style="color: #217273;"></span>
                <span class="names">Help</span>
            </a>
        </li>
        <li>
            <a href="settings.php" class="active">
                <span class="fa-solid fa-bars fa-sm" style="color: #217273;"></span>
                <span class="names">Settings</span>
            </a>
        </li>
        <li>
            <a href="logout.php" class="active">
                <span class="fa fa-sign-out" style="color: #217273;"></span>
                <span class="names">Log out</span>
            </a>
        </li>
    </ul>
<?php } elseif ($role == 'Manager') {
  include('manager.php');
  
  ?>
  
     
<?php } elseif ($role == 'Staff') { 
  include('emp.php');
  
  ?>
 
<?php } elseif ($role == 'Admin') { 
  include('admin.php');
  ?>

<?php 


} ?>
</div>
</div>

</body>
</html>
