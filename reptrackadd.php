<?php
 
 include 'connection.php';
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $status = $_POST['status'];
    $testrecordID = $_POST['number'];

    $sql = "INSERT into reporttrackingtbl (Remark , Status ,testrecordID)
    values ('$name','$status' ,'$testrecordID')";
    $result = mysqli_query($con,$sql);
    if($result){
      header('location:reporttrack.php');
    }
    else{
      die(mysqli_error($con));
    }
  }

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Covid-19</title>
  </head>
  <body>
    <div class="container my-5">
    <form  method="POST">
  <div class="form-group">
    <label >Remark</label>
    <input type="text" class="form-control" placeholder="Enter remark:" name="name" autocomplete="off">
  </div>
  <div class="form-group">
    <label >Status</label>
    <input type="text" class="form-control" placeholder="Enter report status" name="status" autocomplete="off">
  </div>
  <div class="form-group">
    <label >Test Record ID</label>
    <input type="number" class="form-control" placeholder="Enter Patient report ID" name="number" autocomplete="off">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
</body>
</html>