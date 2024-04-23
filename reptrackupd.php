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
    <input type="text" class="form-control" placeholder="Enter ID" name="id" autocomplete="off">
  </div>
  <div class="form-group">
    <input type="submit" class="" name="search" value="Search">
  </div>
</form>
<?php
 
 include 'connection.php';

  if(isset($_POST['search'])){
   $reporttrackingID = $_POST['id'];

   $query = "SELECT * from reporttrackingtbl where reporttrackingID = '$reporttrackingID'";
    
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result)){
    ?>

       <form action="" method="POST">
       <div class="form-group">
       <input type="hidden" class="form-control" name="id" value="<?php echo $row['reporttrackingID']?>">
      </div>
      <div class="form-group">
        <label >Remark</label>
       <input type="text" class="form-control" name="name" value="<?php echo$row['Remark']?>">
      </div>
    <div class="form-group">
      <label >Status</label>
      <input type="text" class="form-control" placeholder="Enter phlebotomist phone no." name="number" value="<?php echo$row['Status']?>">
    </div>
    <div class="form-group">
       <input type="hidden" class="form-control" name="testid" value="<?php echo $row['testrecordID']?>">
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
  $name = $_POST['name'];
  $number = $_POST['number'];

  $querys = "UPDATE reporttrackingtbl set Remark ='$_POST[name]' , Status= '$_POST[number]' where reporttrackingID='$_POST[id]' ";
  $query_run = mysqli_query($con,$querys);
  if($query_run){
      header('location:reporttrack.php');
}
}

?> 