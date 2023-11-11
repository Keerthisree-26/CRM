<?php
include 'database.php';
 if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from  staff where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        // echo "Deleted successfull";
        header('location:employees.php');
    }else{
        die(mysqli_error($conn));
    }
 }
?>