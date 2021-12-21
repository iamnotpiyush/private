<?php
session_start();
include "dp_conn.php";

if (isset($_SESSION['username']) &&isset($_SESSION['id']))
  {  ?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center"
	style="min-height:100vh">
  	 <?php if($_SESSION['role']=='admin'){?>
		
        <!--for admin-->
		 <div class="card" style="width: 18rem;">
             <img src="adminimg.jpg" 
			      class="card-img-top" 
				  alt="admin image">
             <div class="card-body text-center">
                <h5 class="card-title">
				<?=$_SESSION['name']?>
				</h5>
                <a href="logout.php" class="btn btn-dark">Logout</a>
            </div>
         </div>
		 <div class="p-3">
		 <?php   include 'members.php';
		   if (mysqli_num_rows($res)>0) {?>   
		   
		 <h1 class="display-4 fs-1">Members</h1>
		 
		 
		 <table class="table"
		        style="width:32rem;">
              <thead>
                 <tr>
                  <th scope="col">#</th>
                  <th scope="col">name</th>
                  <th scope="col">username</th>
                  <th scope="col">role</th>
                 </tr>
              </thead>
              <tbody>
			  <?php 
			  $i=1;
			  while($rows=mysqli_fetch_assoc($res)){ ?>			 
			
               <tr>
                 <th scope="row"><?=$i?></th>
                  <td><?=$rows['name']?></td>
                  <td><?=$rows['Username']?></td>
                  <td><?=$rows['role']?></td>
               </tr>
			   <?php $i++; } ?>
 
              </tbody>
         </table>
		  <?php	}?>
		  
		 </div>
		 
   		
   <?php	}else { ?>
           <!--for user-->
		 <div class="card" style="width: 18rem;">
             <img src="adminimg.jpg" 
			      class="card-img-top" 
				  alt="admin image">
             <div class="card-body text-center">
                <h5 class="card-title">
				<?=$_SESSION['name']?>
				</h5>
                <a href="logout.php" class="btn btn-dark">Logout</a>
            </div>
         </div>
   <?php }?>
    </div>
</body>
</html>

  <?php } else{
  
	 	header("location:home.php"); 
  }?>