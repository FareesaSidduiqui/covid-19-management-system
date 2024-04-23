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

    <form method="POST">
    <div class="form-group">
    <label >Enter ID:</label>
    <input type="text" class="form-control" placeholder="Enter ID:" name="id" autocomplete="off">
  </div>
  <div class="form-group">
    <input type="submit" class="" name="search" value="Search">
  </div>
</form>
<?php
 
 include 'connection.php';

  if(isset($_POST['search'])){
   $testrecordID = $_POST['id'];

   $query = "SELECT * from testrecordtbl where testrecordID = '$testrecordID'";
    
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result)){
    ?>
       <form action="" method="POST">
       <div class="form-group">
       <input type="hidden" class="form-control" name="id" value="<?php echo $row['testrecordID']?>">
      </div>
      <div class="form-group">
       <input type="hidden" class="form-control" name="petid" value="<?php echo $row['patientID']?>">
      </div>
      <div class="form-group">
        <label >Test Type</label>
       <input type="text" class="form-control" name="testtype" value="<?php echo$row['TestType']?>">
      </div>
    <div class="form-group">
      <label >Test Time Date</label>
      <input type="date" class="form-control" name="slot" value="<?php echo$row['TestTimeSlot']?>">
    </div>
    <div class="form-group">
    <label >Report Status</label>
       <input type="text" class="form-control" name="status" value="<?php echo $row['ReportStatus']?>">
      </div>
      <div class="form-group">
    <label >Final Report</label>
       <input type="text" class="form-control" name="report" value="<?php echo $row['FinalReport']?>">
      </div>
      <div class="form-group">
    <label >Report upload date</label>
       <input type="date" class="form-control" name="upload" value="<?php echo $row['ReportUploadTime']?>">
      </div>
      <div class="form-group">
    <label >Assign phlebotomist ID:</label>
       <input type="number" class="form-control" name="phleid" value="<?php echo $row['phlebotomistID']?>">
      </div>
     <button type="submit" class="btn btn-primary" name="update">Update</button>
    </form>
     <?php  
  }
}
?>
    </div>
</body>
</html>

<?php
include 'connection.php';

if(isset($_POST['update'])){
  $testtype = $_POST['testtype'];
  $slot = $_POST['slot'];
  $reportstatus = $_POST['status'];
  $final = $_POST['report'];
  $uploadrep = $_POST['upload'];
  $phlebotid = $_POST['phleid'];


  $querys = "UPDATE testrecordtbl set TestType='$_POST[testtype]' , TestTimeSlot = '$_POST[slot]',ReportStatus='$_POST[status]', FinalReport = '$_POST[report]' , ReportUploadTime = '$_POST[upload]' , phlebotomistID = '$_POST[phleid]'where testrecordID='$_POST[id]' ";
  $query_run = mysqli_query($con,$querys);
  if($query_run){
      header('location:testrecord.php');
}
}

?> 