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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/styles.css">
</head>
<body>


<div class="container">

<button class="btn btn-primary mt-5" ><a href="addEmployee.php"class="text-light">Add Employee</a></button>
 

<br>
<br>

 
<!-- <button class="btn btn-primary mt-5" ><a href="addEmployee.php"class="text-light">Update</a></button>
  Export data-->

 
 
    <table class="table">

        <thead>
        <tr>
            <th scope="col">S.no</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">phone</th>
            <th scope="col">Designation</th>
            <th scope="col">Joined_Date</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM `staff`";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name = $row['fullname'];
                $email = $row['email'];
                $phone = $row['phone'];
               $designation=$row['designation'];
               $joined_date=$row['joined_date'];
                echo '<tr>
                <th scope="row">' . $id . '</th>
                <td>' . $name . '</td>
                <td>' . $email . '</td>
                <td>' . $phone . '</td>
                <td>' . $designation . '</td>
                <td>' . $joined_date . '</td>
                <td>
                <button class="btn btn-danger"><a href="deleteStaff.php?deleteid=' . $id . '" class="text-light">Delete</a></button>
            </td>
          </tr>';
            }
        }
        ?>
        </tbody>
    </table>
 
    <!-- <button class="btn btn-primary"><a href="updateEmployee.php?updateid='. $id . '"class="text-light">Update</a></button>
                 -->
    </div>

 

 

 

    

 

      
      



</body>
</html>

