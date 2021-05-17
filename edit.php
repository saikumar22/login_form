<?php
$con = mysqli_connect("localhost","root","","wealus");
$id = $_GET["id"];
$sql ="SELECT * FROM users WHERE  id = '$id'";
$result = mysqli_query($con,$sql);
$data = mysqli_fetch_assoc($result);
// print_r($data);
?>

<form class="form" action="" method="post">
<label> Name: </label><br>
<input type="text" name="id" hidden value="<?=$data["id"];?>"><br>
<input type="text" name="name" value="<?=$data["name"];?>"><br>
<label> Roll No: </label><br>
<input type="text" name="rollno" value="<?=$data["rollno"];?>"><br>
<label> Mobile: </label><br>
<input type="text" name="mobile" value="<?=$data["mobile"];?>"><br>
<label> Email: </label><br>
<input type="text" name="email" value="<?php echo $data["email"];?>"><br>
<input type="submit" name="update" >
</form>

<?php
if(isset($_POST["update"])){

    $id=$_POST["id"];
    $stdname=$_POST['name'];
    $stdrollno=$_POST['rollno'];
    $stdmobile=$_POST['mobile'];
    $stdemail=$_POST['email'];

    $sql2="UPDATE `users` SET`name` = '$stdname', `rollno` = '$stdrollno',`email` = '$stdemail', `mobile` = '$stdmobile' WHERE id = '$id'";
    echo $sql2;
    $result = mysqli_query($con,$sql2);
    // print_r($result);
    if($result){
        // echo "succs";
    header('Location: app.php');
    
    }
}
?>