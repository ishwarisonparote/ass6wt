<?php 

include 'conn.php';

$id =$_GET['id'];
$q= "DELETE FROM `table` WHERE id=$id";

mysqli_query($conn,$q);


 ?> 