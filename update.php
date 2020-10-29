<?php 

include 'conn.php';


if(isset($_POST['done'])){


$id=$_GET['id'];
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];


$q=" update `table` set id=$id, username='$username' ,password='$password' where id=$id ";

$query=mysqli_query($conn,$q);

header('location:display.php');


}



 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

 </head>
 <body>
 	<div class="col-lg-6 " style="margin-left: 350px;">
 		<form method="post">


 			<div >
 				<div >
 					<h1 class="text-center">Insert operation</h1>

 				</div>

 				<label>Full name</label>
 				<input type="text" name="name"  class="form-control">

 				<label>Username:</label>
 				<input type="text" name="username" class="form-control">

 				<label>Password:</label>
 				<input type="text" name="password" class="form-control">
 				<br>
 				<button class="btn btn-success" type="submit" name="done" onclick="alert('sussefully update')">Submit</button>

 			</div>


 		</form>

 	</div>

 </body>
 </html> 