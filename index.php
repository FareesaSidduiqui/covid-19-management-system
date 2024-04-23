<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <?php include 'link/links.php';?>
    <?php include 'css/style.php';?>

</head>
<body>
         <nav class = "navbar navbar-expand-sm nav_style p-3">
            <a class = "navbar-brand pl-5" href = "#">COVID-19</a>
            <button class = "navbar-toggler" type = "button" data-toggle = "collapse" 
               data-target = "#navbarSupportedContent" 
               aria-controls = "navbarSupportedContent" aria-expanded = "false" 
               aria-label = "Toggle navigation">
               
               <span class = "navbar-toggler-icon"></span>
            </button>
            
            <div class = "collapse navbar-collapse pr-5" id = "navbarSupportedContent">
               <ul class = "navbar-nav ml-auto">
                  <li class = "nav-item active">
                     <a class = "nav-link" href = "#">Home 
                        <span class = "sr-only">(current)</span>
                     </a>
                  </li>
                  <li class = "nav-item">
                     <a class = "nav-link" href = "#aboutid">About</a>
                  </li>
                  <li class = "nav-item">
                     <a class = "nav-link" href = "#symid">Symptoms</a>
                  </li>
                  <li class = "nav-item">
                     <a class = "nav-link" href = "#preventid">Prevention</a>
                  </li>
                  <li class = "nav-item">
                     <a class = "nav-link" href = "#contactid">Register</a>
                  </li>
                  <li class = "nav-item">
                     <a class = "nav-link" href ="login.php">Admin</a>
                  </li>
               </ul>
               
            </div>
         </nav>

      <div class="main_header">
         <div class="row w-100 h-100">
          <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
             <div class="leftside  w-100 h-100 d-flex justify-content-center align-items-center">
              <img src="images/circle.jpg" width="250" height="250">
             </div>
          </div>
          <div class="col-lg-7 col-md-7 col-12 order-lg-2 order1">
           <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
               <h1><span class="space1">Let's Stay Safe And Fight Together</span> Against C<span class="space2"><span class="corona"><img src="images/corona.png" width="100" height="100"></span> </span>vid-19</h1>
           </div>
          </div>
         </div>
      </div>
    <!-- ************ coronoa updates ********** -->
    <section class="corona_uptd">
      <div class="mb-5">
           <h3 class="text-center"> COVID-19 UPDATES</h3>
      </div>
      <div class="d-flex justify-content-around align-items-center">
         <div>
            <h1 class="count">1,524,266</h1>
            <p>Passengers screened at airpot</p>
         </div>
         <div>
            <h1 class="count">512</h1>
            <p>Active Covid-19 cases</p>
         </div><div>
            <h1 class="count">40</h1>
            <p>Discharged casest</p>
         </div><div>
            <h1 class="count">9</h1>
            <p>Death cases</p>
         </div>
      </div>
    </section>
 <!-- ------------------ About section--------- -->
 <div class="container-fluid sub_section pb-5" id="aboutid">
   <div class="section_header text-center mb-5 mt-4">
      <h1>About COVID-19</h1>
   </div>
   <div class="row pt-5">
      <div class="col-lg-5 col-md-6 col-12 ml-5">
       <img src="images/covid.jpg" class="img_covid img-fluid pl-5" width="500" >
      </div>
      <div class="col-lg-6 col-md-6 col-12 pr-10">
         <h2>What is Covid-19(Corona-Virus)</h2>
         <p>COVID-19 (coronavirus disease 2019) is a disease caused by a virus named SARS-CoV-2.
             It can be very contagious and spreads quickly. Over one million people have 
            died from COVID-19 in the United States.</p>
         <p>Most people infected with the virus will experience mild to moderate respiratory illness and 
            recover without requiring special treatment. However, some will become seriously ill and require medical attention.
             Older people and those with underlying medical conditions like cardiovascular disease, diabetes, chronic respiratory disease, 
             or cancer are more likely to develop serious illness. Anyone can get sick with COVID-19 and become seriously ill or die at any age. </p>
      </div>
   </div>
 </div>
 <!-- ---------------------------------COvid symptoms -------------->
 <div class="container-fluid pt-5 pb-5" id="symid">
   <div class="section_header text-center mb-5 mt-4">
      <h1>Coronavirus Symptoms</h1>
   </div>
   <div class="container">
   <div class="row">
      <div class="col-lg-4 col-md-4 col-12 mt-5">
         <figure class="text-center">
            <img src="images/cough.jpg" class="img-fluid" width="120" height="120">
          <figcaption> cough </figcaption>
         </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
         <figure class="text-center">
            <img src="images/nosey.jpg" class="img-fluid" width="120" height="120">
          <figcaption> runny nose </figcaption>
         </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
         <figure class="text-center">
            <img src="images/fever.jpg" class="img-fluid" width="100" height="100">
          <figcaption> fever </figcaption>
         </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
         <figure class="text-center">
            <img src="images/cold.jpg" class="img-fluid" width="120" height="120">
          <figcaption> cold </figcaption>
         </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
         <figure class="text-center">
            <img src="images/tiredness.jpg" class="img-fluid" width="130" height="120">
          <figcaption> tiredness </figcaption>
         </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
         <figure class="text-center">
            <img src="images/breath.png" class="img-fluid" width="120" height="120">
          <figcaption> breathing difficulty(severe case) </figcaption>
         </figure>
      </div>
   </div>
   </div>
 </div>

 <!-- ---------------------------------Preventions-------------->
 <div class="container-fluid sub_section pt-5 pb-5" id="preventid">
   <div class="section_header text-center mb-5 mt-4">
      <h1>6 Steps of Prevention Againt Covid</h1>
   </div>
   <div class="container">
      <div class="row">
         <div class="col-lg-4 col-md-4 col-12 mt-5" >
            <div class="row">
               <div class="col-lg-4 col-md-4 col-12">
               <figure class="text-center">
            <img src="images/handsan.png" class="img-fluid" width="90" height="90">
         </figure>
               </div>
               <div class="col-lg-8 col-md-8 col-12">
                 <p> Wash your hands regularly for 20 seconds,
            with soap or alochol-based hand rub</p> 
               </div>
            </div>
         </div>

         <div class="col-lg-4 col-md-4 col-12 mt-5" >
            <div class="row">
               <div class="col-lg-4 col-md-4 col-12">
               <figure class="text-center">
            <img src="images/mask.jpg" class="img-fluid" width="90" height="90">
         </figure>
               </div>
               <div class="col-lg-8 col-md-8 col-12">
                 <p> Cover your nose and mouth with a dsiposable
                  tissue or fiexed elbow when you cough or sneeze.</p> 
               </div>
            </div>
         </div>

         <div class="col-lg-4 col-md-4 col-12 mt-5" >
            <div class="row">
               <div class="col-lg-4 col-md-4 col-12">
               <figure class="text-center">
            <img src="images/social.jpg" class="img-fluid" width="150" height="150">
         </figure>
               </div>
               <div class="col-lg-8 col-md-8 col-12">
                 <p> Maintain social distance(1 meter or 3 meter)</p> 
               </div>
            </div>
         </div>

         <div class="col-lg-4 col-md-4 col-12 mt-5" >
            <div class="row">
               <div class="col-lg-4 col-md-4 col-12">
               <figure class="text-center">
            <img src="images/stay.jpg" class="img-fluid" width="100" height="100">
         </figure>
               </div>
               <div class="col-lg-8 col-md-8 col-12">
                 <p> Stay home and self-isolate from others in the household
                  if you feel unwell.  </p> 
               </div>
            </div>
         </div>

         <div class="col-lg-4 col-md-4 col-12 mt-5" >
            <div class="row">
               <div class="col-lg-4 col-md-4 col-12">
               <figure class="text-center">
            <img src="images/news.jpg" class="img-fluid" width="90" height="90">
         </figure>
               </div>
               <div class="col-lg-8 col-md-8 col-12">
                 <p>Stay informed by watching TV news and folllow the
                  recommended practices.</p> 
               </div>
            </div>
         </div>

         <div class="col-lg-4 col-md-4 col-12 mt-5" >
            <div class="row">
               <div class="col-lg-4 col-md-4 col-12">
               <figure class="text-center">
            <img src="images/sick.jpg" class="img-fluid" width="120" height="120">
         </figure>
               </div>
               <div class="col-lg-8 col-md-8 col-12">
                 <p> if you have fever, cough and difficulty 
                  in breathing , seek for medical care early.</p> 
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>

   <!-- ---------------------------------Register form-------------->
 <<div class="container-fluid pt-5 pb-5" id="contactid">
   <div class="section_header text-center mb-5 mt-4">
      <h1>Registeration Form</h1>
   </div>
   <div>
      <div class="container">
         <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">

            <form action="" method="POST" >

            <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username"  placeholder="fullname" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="email address" required autocomplete="off">
  </div>

  <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" name="address" placeholder="Address" required autocomplete="off">
  </div>
  
  <div class="form-group">
  <label for="birthday">Date of Birth:</label><br>
  <input type="date" id="birthday" name="birthday" required>
  </div>

  <div class="form-group">
    <label>Mobile number</label>
    <input type="text" class="form-control" name="mobile"  placeholder="mobile" autocomplete="off" required>
  </div>
  
  <div class="form group">
<p>Choose your Gender</p>
<input type="radio" id="radiobtn1" name="gen" value="Male">
<label>Male</label><br>
<input type="radio" id="radiobtn2" name="gen" value="Female">
<label>Female</label><br>
<input type="radio" id="radiobtn3" name="gen" value="Others">
<label>Others</label><br><br>
</div>

   <!--<div class="form-group">
    <label>Select Symptoms</label><br>
    <div class="custom-control custom-checkbox
    custom-control-inline text-capitalize">
    <input type="checkbox" class="custom-control-input"
    id="customcheckbox1" name="coronasym[]" value="cold">
    <label class="custom-control-label" for="customcheckbox1">Cold</label>
   </div>

   <div class="custom-control custom-checkbox
    custom-control-inline text-capitalize">
    <input type="checkbox" class="custom-control-input"
    id="customcheckbox2" name="coronasym[]" value="fever">
    <label class="custom-control-label" for="customcheckbox2">Fever</label>
   </div>

   <div class="custom-control custom-checkbox
    custom-control-inline text-capitalize">
    <input type="checkbox" class="custom-control-input"
    id="customcheckbox3" name="coronasym[]" value="breath">
    <label class="custom-control-label" for="customcheckbox3">Difficulty in breath</label>
   </div>

   <div class="custom-control custom-checkbox
    custom-control-inline text-capitalize">
    <input type="checkbox" class="custom-control-input"
    id="customcheckbox4" name="coronasym[]" value="weak">
    <label class="custom-control-label" for="customcheckbox4">feeling weak</label>
   </div>
   </div>-->
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
            </div>
         </div>
      </div>
   </div>

</div>

<!-- ----------------------Footer ---------------->
<footer class="mt-5">
   <div class="footer_style text-white text-center container-fluid">
      <p>copyright cc</p>
   </div>
</footer>



<!-- j Query---------------->
<script type="text/javascript">
$('.count').counterUp({
   delay:10,
   time:3000
})
</script>
      </body>
</html>


<?php 

//error_reporting(0);
include 'connection.php';

if(isset($_POST['submit'])){

   $username = $_POST['username'];
   $email = $_POST['email'];
   $address = $_POST['address'];
   $birthday = $_POST['birthday'];
   $mobile = $_POST['mobile'];
   $gender = $_POST['gen'];
   $symp = $_POST['coronasym'];

   $chk = "";

   foreach($symp as  $chk1){
     $chk .= $chk1.",";
   }
   
   $insertquery = "INSERT into patientstbl(FullName,EmailAddress,FullAddress,DateOfBirth,MobileNumber,Gender,Symptoms)
    values('$username','$email','$address','$birthday','$mobile','$gender','$chk') ";


      $query = mysqli_query($con, $insertquery);

      if($con){
         ?>
         <script>
             alert('insertion Successful');
         </script>
         <?php }
         else{
             ?>
              <script>
             alert(' no inserted ');
         </script>
         <?php
         }
}

?>