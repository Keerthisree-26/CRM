<?php
include 'database.php';
 if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from  leads where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        // echo "Deleted successfull";
        header('location:leads.php');
    }else{
        die(mysqli_error($conn));
    }
 }
?>