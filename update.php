<?php
include 'connect.php';
$id=$_GET['updateid'];
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql= "update `crud` set id=$id,name='$name',mobile='$mobile',email='$email',password='$password'";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "insertd successfully";
        header('location:display.php');
    }else{
        // die(mysqli_error($con));
        false;
    }
}


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>update </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container my-5 col-6">
    <form method="post">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" placeholder="Enter name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label class="form-label">Mobile</label>
            <input type="tel" name="mobile" placeholder="enter mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" placeholder="Enter email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" placeholder="enter password"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Update</button>
    </form>
    </div>
  </body>
</html>