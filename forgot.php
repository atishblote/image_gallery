<?php 
  
  $con = new mysqli("localhost" , "root" , "" , "i_g");



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style type="text/css">
      input{
        min-width: 300px;
      }
    </style>
    <title>login </title>
</head>
<body class="bodyback">
    
    <div class=" d-flex justify-content-center align-items-center mt-5  "  >
        <div class=" row transback  p-3 self-align-center   h-75" style="background-color: #e8e8e873; min-width:400px;">
           <div class="d-block w-100">
                    <label for="" class="d-flex justify-content-center "><h4>forgot Password</h4></label>
                    <form method="post" action="check.php">

                      <label for="">Full Name :</label>
                          <div class="form-group d-flex justify-content-center ">
                            
                            <input type="text" name="rname"  class="form-control w-100" placeholder="name" >
                          </div>


                        <label for="">Email :</label>
                        <div class="form-group d-flex justify-content-center ">
                            
                            <input type="email"  name="remail" class="form-control w-100" placeholder="@gmail.com" required>
                          </div>
                        
                          <label for="">New Password :</label>
                          <div class="form-group d-flex justify-content-center ">
                            
                            <input type="password" name="rpass" class="form-control w-100" placeholder="pass..." required>
                          </div>

                          <label for="">Mobile :</label>
                          <div class="form-group d-flex justify-content-center ">
                            
                            <input type="text" name="rmobile" class="form-control w-100" placeholder="+91" required>
                          </div>
                          
                          
                          <div class="form-group  d-flex justify-content-center">
                            
                            <input type="submit" name="UpdateAccount" class=" form-control w-50 butgrad"  value="Update" style="font-weight: bold; color: antiquewhite;">
                          </div>

                         <div class="small"><a href="#">Privacy Policy</a></div>
                    </form>
                </div> 
        </div>
            
         <!-- sign uo -->
                





    <script src="js/jqurey.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>