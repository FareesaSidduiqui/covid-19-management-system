<?php
 
 include 'connection.php';
  if(isset($_POST['submit'])){
    $id = $_POST['patid'];
    $testtype = $_POST['testtype'];
    $slot = $_POST['slot'];
    $status = $_POST['status'];
    $final = $_POST['final'];
    $upload = $_POST['upload'];
    $pheid = $_POST['pheid'];

    $sql = "INSERT into testrecordtbl (patientID , TestType ,TestTimeSlot , ReportStatus , FinalReport, ReportUploadTime , phlebotomistID)
    values ('$id','$testtype','$slot','$status','$final','$upload','$pheid')";
    $result = mysqli_query($con,$sql);
    if($result){
      //echo "DATA inserted";
      header('location:testrecord.php');
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

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container my-5">
    <form  method="POST">
  <div class="form-group">
  <label >Patient ID</label>
    <input type="number" class="form-control"  name="id" autocomplete="off">
  </div>
  <div class="form-group">
    <label >Test Type</label>
    <input type="text" class="form-control" placeholder="test type" name="testtype" autocomplete="off">
  </div>
  <div class="form-group">
    <label >Slot</label>
    <input type="date" class="form-control" name="slot" autocomplete="off">
  </div>
  <div class="form-group">
    <label >Status</label>
    <input type="text" class="form-control" placeholder="Enter patient status" name="status" autocomplete="off">
  </div>
  <div class="form-group">
    <label >Final Report</label>
    <input type="text" class="form-control" placeholder="Enter phlebotomist name:" name="name" autocomplete="off">
  </div>
  <div class="form-group">
    <label >Upload Date</label>
    <input type="date" class="form-control" name="upload" autocomplete="off">
  </div>
  <div class="form-group">
  <label >Assign phlebotomist</label>
    <input type="number" class="form-control" placeholder="Enter phlebotomist ID" name="pheid" autocomplete="off">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
</body>
</html>