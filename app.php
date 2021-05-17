<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<?php
$con = mysqli_connect("localhost","root","","wealus");

if(isset($_POST["register"])){
$stdname=$_POST['name'];
$stdrollno=$_POST['rollno'];
$stdmobile=$_POST['mobile'];
$stdemail=$_POST['email'];

$sql ="INSERT INTO `users` (`name`, `rollno`, `mobile`, `email`) VALUES ( '$stdname', '$stdrollno', '$stdmobile', '$stdemail')";
$result = mysqli_query($con,$sql);

if($result){
    echo "success<br>";
}
}

// ------------------LIST OF USERS---------------------
?>
<div class="container">
   <h1> List Of Users</h1>
<?php

$result = mysqli_query($con,"select * from users");
echo "<table class='table'>";
echo "<tr><td>ID</td><td>Name</td><td>Rollnumber</td><td>Mobile</td><td>Email</td><td>Edit</td><td>Delete</td><td>Print</td></tr>";
while($row = mysqli_fetch_assoc($result)){
    echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["rollno"]."</td><td>".$row["mobile"]."</td><td>".$row["email"];
    echo "</td><td><a href="."edit.php?id=".$row['id']."><button class='btn btn-primary'>Edit</button></a></td><td><a href="."delete.php?id=".$row['id']."><button class='btn btn-danger'>Delete</button></a>
    </td><td><a href="."print.php?id=".$row['id']."><button class='btn btn-danger'>Print</button></a></td></tr>";
}
echo "</table>";
?>
</div>


