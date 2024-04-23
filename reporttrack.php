
<! DOCTYPE html>
<html>
    <head>
        <title> </title>

        <?php include 'link/links.php';?>
        <?php include 'css/styleadmin.php';?>
        <?php include 'css/style.php';?>
        <style>
html,body{
   font-family: 'Poppins', sans-serif;
}
#customers {
   font-family: 'Poppins', sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4E73C3;
  color: white;
}
.fa{
   color:#000;
}

.table-responsive{
   max-width: 1200px;
   max-height: 450px;
   overflow: scroll;
}

.table{
   border-collapse: collapse;
}
th{
   position: sticky;
   top: 0;
}  


</style>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100&display=swap" rel="stylesheet">
    </head>
    <body>
    <nav class = "navbar navbar-expand-sm nav_style p-2">
            <a class = "navbar-brand pl-5" href = "index.php">COVID-19</a>
            <button class = "navbar-toggler" type = "button" data-toggle = "collapse" 
               data-target = "#navbarSupportedContent" 
               aria-controls = "navbarSupportedContent" aria-expanded = "false" 
               aria-label = "Toggle navigation">
               
               <span class = "navbar-toggler-icon"></span>
            </button>
            
            <div class = "collapse navbar-collapse pr-5" id = "navbarSupportedContent">
               <ul class = "navbar-nav ml-auto">
                  <li class = "nav-item active">
                     <a class = "nav-link" href = "index2.php">Home 
                        <span class = "sr-only">(current)</span>
                     </a>
                  </li>
                  <li class = "nav-item">
                     <a class = "nav-link" href = "logout.php">Sign out</a>
                  </li>
               </ul>
               
            </div>
        </nav>
        <!------Start Container --------->
        <center>
        <div class="main-div mt-3">
            <h3 class="text-center text-uppercase mt-5">Report Status:</h3>
            <div class="center-div">
                <div class="table-responsive">
                   <table id="customers">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Remark</th>
                        <th>Status</th>
                        <th>TestrecordID</th>
                        <th colspan="2">Operations</th>
                    </tr>
                    </thead>
                    <tbody>
                       <?php 
                        include 'connection.php';

                       $selectquery = " SELECT * from reporttrackingtbl";

                       $querys = mysqli_query($con,$selectquery);


                         // for data fetching start too end
                          while($res = mysqli_fetch_array($querys)){
                            ?>
                         <tr>
                         <td><?php echo$res['reporttrackingID'];?></td>
                         <td><?php echo$res['Remark'];?></td>
                         <td><?php echo$res['Status'];?></td>
                         <td><?php echo$res['testrecordID'];?></td>
                         <td><a href="reptrackadd.php" data-toggle="tooltip" data-placement="top" title="ADD">
                         <i class="fa fa-plus" aria-hidden="true"></i></a></td>                        
                         <td><a href="reptrackupd.php?updateid='.$id.'" data-toggle="tooltip" data-placement="top" title="UPDATE">
                           <i class='fa fa-edit'></i></a></td>
                        </tr>
                         <?php
                            }
                           ?>
                    </tbody>
                   </table>
                </div>
            </div>

        </div>
                           </center>

            <script>
             $(document).ready(function(){
             $('[data-toggle="tooltip"]').tooltip();
             });
             </script>
    </body>
</html>
