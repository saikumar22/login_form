<?php
$id = $_GET['id'];

$con = mysqli_connect("localhost","root","","wealus");
$sql ="DELETE FROM users WHERE ID = '$id'";
$result = mysqli_query($con,$sql);
if($result){
    echo "deleted success";
    header('Location: app.php');
}
?>