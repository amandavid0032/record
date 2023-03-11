<?php
$conn=mysqli_connect("localhost","root","","record");   
$id=$_GET['id']; 
 $delete="DELETE FROM basic_record where id=$id";
$query=mysqli_query($conn,$delete);
header('location:view_record.php');
?>