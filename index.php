<?php
session_start();


if (!isset($_SESSION['username']) && !isset($_SESSION['id']))
  {  ?>
<!DOCTYPE html>
<html>
<head>
<style>


</style>
<title>multi user role based login system</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<div  style="background-color:#e5e5e5;text-align:center;padding:30px;margin-top:7px;">   project </div>
<div style="border:2px solid grey;float:left;width:59%;height:700px;margin-top:10px;">LOGO</div>
    <div class="container d-flex justify-content-center align-items-center;"
	style="min-height:60vh;float:left;width:39%;margin:10px;">
    <form class="border shadow p-3 rounded"
	  action="cheak-login.php"
	  method="post"
	 style="width:450px">
	 <h1 class="text-center p-3 " >LOGIN</h1>
	 <?php if(isset($_GET['error'])){?>
		
	 <div class="alert alert-danger" role="alert">
        <?=$_GET['error']?> 
     </div>
	  <?php } ?>
  <div class="mb-3">
    <label for="user name" 
	       class="form-label">username</label>
    <input type="text" 
	       name="username"
	       class="form-control" 
		   id="username" >
  </div>
   
  <div class="mb-3">
    <label for="password" 
	       class="form-label">password</label>
    <input type="password" 
	       name="password"
	       class="form-control" 
		   id="password" >
  </div>
    <div class="mb-0">
    <label class="form-label">select user type</label>
  
  </div>
  <select class="form-select mb-3" 
          name="role"
         aria-label="Default select example">
       <option selected value="user">User</option>
 	   <option value="admin">Admin</option>
   
  </select>
 
  
  <button type="submit" class="btn btn-primary"style="text-align:center">Submit</button><br><br>
  <div style="text-align:center;border-top:1px solid black;margin-top:20px;paddig-top:10px;">
  <div >

  <p >or</p>
  <h3 style="paddig-top:20px">Register As</h3>

    <a href="usereg.php"> reg</a>
   </div>
   
   </div>

</form>
    </div>
</body>
</html>

  <?php } else{
	  
	 	header("location:home.php"); 
  }?>