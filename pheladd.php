<?php
 
 include 'connection.php';
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mobile = $_POST['number'];

    $sql = "INSERT into phlebotomisttbl (FullName , MobileNumber)
    values ('$name','$mobile')";
    $result = mysqli_query($con,$sql);
    if($result){
      //echo "DATA inserted";
      header('location:phlebotomist.php');
    }
    else{
      die(mysqli_error($con));
    }
  }

?>


<!doctype html>
<html lang="en">
  <head>
    <style>
     .form-control{
      width: 50%;
     }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="form.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container my-5">
      <form  method="POST">
        <div class="form-group">
       <label >Name</label>
        <input type="text" class="form-control" placeholder="Enter phlebotomist name:" name="name" autocomplete="off">
        </div>
        <div class="form-group">
           <label >Mobile</label>
         <input type="text" class="form-control" placeholder="Enter phlebotomist phone no." name="number" autocomplete="off">
        </div>
  <button type="submit" class="btn btn-primary" vlaue="submit" name="submit">Submit</button>
</form>
    </div>
    
</body>
</html>