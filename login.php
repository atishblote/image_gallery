<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>login </title>

    <style type="text/css">
      .alert{
        border-color: red;
      }
    </style>
</head>
<body class="bodyback">
    
    <div class=" d-flex justify-content-center align-items-center mt-5  "  >
        <div class=" row transback  p-0    h-75" style="background-color: #e8e8e873;; min-width: 400px;">
            <div class="col-3 col-lg-3 col-sm-3 col-md-3 p-0 m-0 py-5 bg-dark rounded-left" >
              <div class="nav flex-column nav-pills  btn-sm p-1 d-block" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">SignIn</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Register</a>
                
              </div>
            </div>
            <div class="col px-0 py-2 justify-content-center d-flex ">
              <div class="tab-content col" id="v-pills-tabContent">
         <!-- sign uo -->
                <div class="tab-pane fade show active " id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <label for="" class="d-flex justify-content-center  "><h4>Welcome Back</h4></label>
                    <form method="post" action="check.php" onsubmit=" return logValidFun()">

                        <label for="">Email</label>
                        <div class="form-group d-flex justify-content-center ">
                            
                            <input id="lemailInput" type="email" name="lemail" class="form-control w-100 " placeholder="@gmail.com" required>
                          </div>

                          <label for="">Secrete key</label>
                          <div class="form-group d-flex justify-content-center ">
                              
                              <input id="sKey" type="password" name="skey" class="form-control w-100" placeholder="key" required>
                            </div>
                        
                          <label for="">Password</label>
                          <div class="form-group d-flex justify-content-center ">
                            
                            <input id="lpassInput" type="password"  name="lpass" class="form-control w-100 " placeholder="pass..." required>
                          </div>

                          
                          <div class="form-group  d-flex justify-content-center">
                            
                            <input type="submit"  name="loginAccount" class=" form-control w-50 butgrad "  value="login" style="font-weight: bold; color: antiquewhite;">
                          </div>

                          <div class="small"><a href="Project.html">Privacy Policy</a></div>
                    </form>
                </div>


<!-- register  -->
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <label for="" class="d-flex justify-content-center "><h4>Create Account </h4></label>
                    <form method="post" action="check.php">

                      <label for="">Full Name :</label>
                          <div class="form-group d-flex justify-content-center ">
                            
                            <input type="text" name="rname"  class="form-control w-100" placeholder="atish..." required>
                          </div>


                        <label for="">Email :</label>
                        <div class="form-group d-flex justify-content-center ">
                            
                            <input type="email"  name="remail" class="form-control w-100" placeholder="@gmail.com" required>
                          </div>
                        
                          <label for="">Password :</label>
                          <div class="form-group d-flex justify-content-center ">
                            
                            <input type="password" name="rpass" class="form-control w-100" placeholder="pass..." required>
                          </div>

                          <label for="">Mobile :</label>
                          <div class="form-group d-flex justify-content-center ">
                            
                            <input type="text" name="rmobile" class="form-control w-100" placeholder="+91" required>
                          </div>
                          
                          
                          <div class="form-group  d-flex justify-content-center">
                            
                            <input type="submit" name="RegisterAccount" class=" form-control w-50 butgrad"  value="Register" style="font-weight: bold; color: antiquewhite;">
                          </div>

                         <div class="small"><a href="Project.html">Privacy Policy</a></div>
                    </form>
                </div>
                </div>
                
              </div>
            </div>
          </div>
    </div>



    <script src="js/jqurey.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- <script>
      $(document).ready(function(){
        function logValidFun(){
          var email = document.getElementById("lemailInput").value();
          var sKey = document.getElementById("sKey").value();
          var pass = document.getElementById("lpassInput").value();

          if (email == '')
           {
            $("#lemailInput").addClass(".alert");
           };
        };
      });
    </script> -->
</body>
</html>