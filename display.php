<?php 
include 'conn.php';

if(isset($_POST['done'])){

$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];


$q=" SELECT * FROM `table`";

$query=mysqli_query($conn,$q);

}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<meta charset="utf-8">
  <meta name="viewport" content="widtd=device-widtd, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

 </head>
 <body>

 	<div class="container">
 		<div><a href="insert.php">
 			<button>
 				<-Back
 			</button></a>
 		</div>
 		<div>
 			<h1 class="text-center">Display</h1>
 			<table class="table table-striped">

 				<tr>
 					<th>Id</th>
 					<th>Full name</th>
					<th>Username</th>
					<th>Password</th>
					<th>Delete</th>
					<th>Update</th>

 				</tr>



 <?php 
include 'conn.php';

$q=" SELECT * FROM `table` ";

$query=mysqli_query($conn,$q);
  //if($res = mysql_fetch_array($query)){
    //               echo "yes ";
      //          }else{
        //        echo "not";
          //      }
while($res = mysqli_fetch_array($query)){

 ?>


 				<tr>
 					<td> <?php echo $res['id'] ?></td>
 					<td><?php echo $res['name']?></td>
					<td><?php echo $res['username']?></td>
					<td><?php echo $res['password']?></td>
					<td ><a href="delete.php?id=<?php echo $res['id'];?>" ><button class="btn ">Delete</button></a></td>
					<td><a href="update.php?id=<?php echo $res['id'];?>"><button class="btn">Update</button></a></td>

 				</tr>
<?php 
}
?>
 			</table>
 		</div>
 	</div>

 </body>
 </html> 
