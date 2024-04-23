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
    <input type="text" class="form-control" placeholder="Enter patient ID" name="id" autocomplete="off">
  </div>
  <div class="form-group">
    <input type="submit" class="" name="search" value="Search">
  </div>
</form>
<?php
 
 include 'connection.php';

  if(isset($_POST['search'])){
   $patientID = $_POST['id'];

   $query = "SELECT * from patientstbl where patientID = '$patientID'";
    
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result)){
    ?>
       <form action="" method="POST">
       <div class="form-group">
       <input type="hidden" class="form-control" name="id" value="<?php echo $row['patientID']?>">
      </div>
      <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username"  placeholder="fullname" value="<?php echo $row['FullName']?>" required>
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="email address" required autocomplete="off" value ="<?php echo $row['EmailAddress']?>">
  </div>

  <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" name="address" placeholder="Address" required autocomplete="off" value ="<?php echo $row['FullAddress']?>">
  </div>
  
  <div class="form-group">
  <label for="birthday">Date of Birth:</label><br>
  <input type="date" id="birthday" name="birthday" required value ="<?php echo $row['DateOfBirth']?>">
  </div>

  <div class="form-group">
    <label>Mobile number</label>
    <input type="text" class="form-control" name="mobile"  placeholder="mobile" autocomplete="off" required value ="<?php echo $row['MobileNumber']?>">
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
    $username = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $birthday = $_POST['birthday'];
    $mobile = $_POST['mobile'];
    
  $querys = "UPDATE patientstbl set FullName='$_POST[username]',EmailAddress='$_POST[email]',FullAddress='$_POST[address]',DateOfBirth='$_POST[birthday]' , MobileNumber = '$_POST[mobile]'where patientID='$_POST[id]' ";
  $query_run = mysqli_query($con,$querys);
  if($query_run){
    header('location:patient.php');
}
}

?> 