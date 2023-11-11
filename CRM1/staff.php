
<?php
include('sidebar.php');
?>
<?php
require_once "database.php";



$query="select * from staff";



$result=mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class="container">
 

 <div class="container">



  <div class="row">



     <div class="col leads-page">



         <div class="card">



             <div class="card-header">



                 <h2 class="display-6 text-center">Staff Data</h2>



             </div>



             <div class="card-body">







             <table class="table table-bordered  text-center">



                 <tr class="bg-dark text-white">



                     <td>



                         StaffID



                     </td>



                     <td>



                          Name



                     </td>



                     <td>



                         Email



                     </td>



                     <td>



                         Phone  Number



                     </td>



                     <td>



                         designation



                     </td>



                   



                     <!-- <td>



                         Joined_date



                     </td> -->



                  



                     







                 </tr>



                 <tr>



                     <?php



                     while($row=mysqli_fetch_assoc($result))



                     {



                   ?>



                   <td><?php echo $row['id']; ?></td>



                   <td><?php echo $row['fullname']; ?></td>



                   <td><?php echo $row['email']; ?></td>



                   <td><?php echo $row['phone']; ?></td>



                   <td><?php echo $row['designation']; ?></td>



                  

<!-- <td><button type="submit" class="btn btn-primary" name="submit">Update</button> -->

                 

                 </td>



                   











               </tr>



                <?php



                     }



                    



                     ?>







              



             </table>



             </div>



         </div>



     </div>



 </div>







</div>


</body>
</html>