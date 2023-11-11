<?php
include('sidebar.php');
?>
<?php

 

require_once "database.php";



$query="select * from leads";



$result=mysqli_query($conn,$query);

?>
<!DOCTYPE html>

 

<html lang="en">

 

<head>

 

    <meta charset="UTF-8">

 

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

 

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

 

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <meta name="viewport" content="width=device-width, initial-scale=1">

 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

 

 

 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

 

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

 

<script src="https://kit.fontawesome.com/4a71d2502b.js" crossorigin="anonymous"></script>

   

 

    <link rel="stylesheet" href="style.css">

 

    <title>Home Page</title>

 

</head>

 

<body>

    <div class="container">
 

        <div class="container">

 

         <div class="row">

 

            <div class="col leads-page">

 

                <div class="card">

 

                    <div class="card-header">

 

                        <h2 class="display-6 text-center">LEADS DATA</h2>

 

                    </div>

 

                    <div class="card-body">
                    <table class="table">

<thead>
<tr>
    <th scope="col">S.no</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Mobile</th>
    <th scope="col">Address</th>
    <th scope="col">Status</th>
    <th scope="col">Requirement</th>
    <th scope="col">Operations</th>
</tr>
</thead>
<tbody>
<?php
$sql = "SELECT * FROM `leads`";
$result = mysqli_query($conn, $sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['fullname'];
        $email = $row['email'];
        $phone = $row['phone'];
        $address = $row['address'];
        $status = $row['status'];
        $requirement = $row['requirement'];
        
        echo '<tr>
        <th scope="row">' . $id . '</th>
        <td>' . $name . '</td>
        <td>' . $email . '</td>
        <td>' . $phone . '</td>
        <td>' . $address . '</td>
        <td>' . $status . '</td>
        <td>' . $requirement . '</td>
        <td>
        <button class="btn btn-primary"><a href="update.php?updateid='. $id . '"class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php?deleteid=' . $id . '" class="text-light">Delete</a></button>
    </td>
  </tr>';
    }
}
?>
</tbody>
</table>
 

 

 

 

                    </div>

 

                </div>

 

            </div>

 

        </div>

 

 

 

    </div>

 

</body>

 

</html>