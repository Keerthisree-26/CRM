<?php
include('sidebar.php');
?>

<?php
require_once 'database.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="styles/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div class="container">



<button class="btn btn-primary mt-5" ><a href="addUser.php"class="text-light">Add User:</a></button>
<br>
<br>


 

 <table class="table">

        <thead>
        <tr>
            <th scope="col">S.no</th>
            <th scope="col">Name</th>
            <th scope="col">Password</th>
            <th scope="col">Role</th>
           
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM `roles`";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $username = $row['username'];
                $password = $row['password'];
                $role = $row['role'];
               
                echo '<tr>
                <th scope="row">' . $id . '</th>
                <td>' . $username . '</td>
                <td>' . $password . '</td>
                <td>' . $role . '</td>
              
                <td>
                <button class="btn btn-danger"><a href="deleteStaff.php?deleteid=' . $id . '" class="text-light">Delete</a></button>
            </td>
          </tr>';
            }
        }
        ?>
        </tbody>
    </table>
  
      


    </div>
</body>
</html>

