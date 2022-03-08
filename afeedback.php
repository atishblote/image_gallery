<?php 
    require 'session.php';
$username = $_SESSION['name'];




  // mysql connectivity
    $con = new mysqli("localhost" , "root" , "" , "i_g");

    // write query data
    $query = "SELECT * FROM admin_feedback WHERE feedback_id = 1";

     // exacute query
    $result = $con->query($query);

    


 ?>





<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>dummdashbord</title>

    <!-- Custom fonts for this template-->
    
    


    <!-- css file link-->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    


</head>

<body  >
    
    <div class="row m-0 p-0">
        <div class="d-flex col-lg-12 col-md-12 col-sm-12 px-lg-5  " style="background-color:#e67e22;" >
            <div class=" d-flex  col-lg-6 p-0 m-0">
                 <svg xmlns="http://www.w3.org/2000/svg" style="width: 51px;padding: 0px; margin:-4px 0px -8px -8px;" width="60" height="70" viewBox="0 0 209.608 313.535"><defs><linearGradient id="a" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox"><stop offset="0" stop-color="#f14668"/><stop offset="1" stop-color="gray"/></linearGradient><linearGradient id="b" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox"><stop offset="0" stop-color="gray"/><stop offset="1" stop-color="#f14668"/></linearGradient><filter id="c" x="0" y="27.773" width="179.915" height="179.89" filterUnits="userSpaceOnUse"><feOffset dy="3" input="SourceAlpha"/><feGaussianBlur stdDeviation="3" result="d"/><feFlood flood-opacity="0.741"/><feComposite operator="in" in2="d"/><feComposite in="SourceGraphic"/></filter><filter id="e" x="48.773" y="28.581" width="79.634" height="284.954" filterUnits="userSpaceOnUse"><feOffset dy="-1" input="SourceAlpha"/><feGaussianBlur stdDeviation="3" result="f"/><feFlood/><feComposite operator="in" in2="f"/><feComposite in="SourceGraphic"/></filter><filter id="g" x="54.212" y="101.164" width="64.087" height="50" filterUnits="userSpaceOnUse"><feOffset dy="3" input="SourceAlpha"/><feGaussianBlur stdDeviation="3" result="h"/><feFlood flood-opacity="0.4"/><feComposite operator="in" in2="h"/><feComposite in="SourceGraphic"/></filter><filter id="i" x="72.48" y="101.164" width="45.819" height="50" filterUnits="userSpaceOnUse"><feOffset dy="3" input="SourceAlpha"/><feGaussianBlur stdDeviation="3" result="j"/><feFlood flood-opacity="0.071"/><feComposite operator="in" in2="j"/><feComposite in="SourceGraphic"/></filter><linearGradient id="k" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox"><stop offset="0" stop-color="#290149"/><stop offset="1" stop-color="#f14668"/></linearGradient><linearGradient id="l" x1="0.5" y1="1" x2="0.5" gradientUnits="objectBoundingBox"><stop offset="0" stop-color="#f14668" stop-opacity="0"/><stop offset="1" stop-color="#6b011f"/></linearGradient></defs><g transform="translate(-672.409 -694.422)"><g transform="translate(620.367 302.586)"><path d="M0,0H64a50,50,0,0,1,50,50v65a0,0,0,0,1,0,0H50A50,50,0,0,1,0,65V0A0,0,0,0,1,0,0Z" transform="translate(80 532)" fill="url(#a)"/><g transform="matrix(1, 0, 0, 1, 52.04, 391.84)" filter="url(#c)"><path d="M50,0h64a0,0,0,0,1,0,0V65a50,50,0,0,1-50,50H0a0,0,0,0,1,0,0V50A50,50,0,0,1,50,0Z" transform="matrix(-0.69, 0.72, -0.72, -0.69, 170.92, 113.66)" fill="url(#b)"/></g><g transform="matrix(1, 0, 0, 1, 52.04, 391.84)" filter="url(#e)"><text transform="matrix(1, 0.02, -0.02, 1, 62.41, 38.58)" fill="#f14668" font-size="200" font-family="SegoeUI-Bold, Segoe UI" font-weight="700"><tspan x="0" y="216">i</tspan></text></g><text transform="matrix(-0.999, -0.035, -0.035, 0.999, 261.633, 397.32)" fill="#290149" font-size="200" font-family="SegoeUI-Bold, Segoe UI" font-weight="700"><tspan x="0" y="216">G</tspan></text><g transform="matrix(1, 0, 0, 1, 52.04, 391.84)" filter="url(#g)"><path d="M32.249,0C50.06,0,45.586,8.171,45.586,17.008S50.06,32,32.249,32,0,24.837,0,16,14.438,0,32.249,0Z" transform="translate(63.21 107.16)" fill="#ffd880" opacity="0.36"/></g><path d="M30.616,0C47.525,0,43.278,8.171,43.278,17.008S47.525,32,30.616,32,0,24.837,0,16,13.707,0,30.616,0Z" transform="translate(117.589 499)" fill="#290149"/><path d="M27.1,0C42.062,0,38.3,8.171,38.3,17.008S42.062,32,27.1,32,0,24.837,0,16,12.132,0,27.1,0Z" transform="translate(122.618 499)" fill="#f14668"/><path d="M23.555,0C36.564,0,33.3,8.171,33.3,17.008S36.564,32,23.555,32,0,24.837,0,16,10.546,0,23.555,0Z" transform="translate(127.68 499)" fill="#6b011f"/><g transform="matrix(1, 0, 0, 1, 52.04, 391.84)" filter="url(#i)"><path d="M19.467,0c10.751,0,8.051,8.171,8.051,17.008S30.218,32,19.467,32,0,24.837,0,16,8.716,0,19.467,0Z" transform="translate(81.48 107.16)" fill="#ffd880" opacity="0.91"/></g><path d="M134.618,472.918l57.224-2.85,53.5,49.989v49.769l-54.593-96.908L133.522,500.1Z" fill="url(#k)"/><path d="M171.473,532H184.76l-1.077,23L154.6,553.921l27.292-8.259v-5.925Z" fill="rgba(241,70,104,0.49)"/><path d="M0,35.711s.494-24.1,3.771-32.14,9.337,0,9.337,0L10.055,73.058Z" transform="translate(136.999 601.901) rotate(179)" fill="url(#l)"/><path d="M10.227,25.625S.148,24.461,0,17.985,25.465,0,25.465,0,7.927,11.509,8.075,17.985,10.227,25.625,10.227,25.625Z" transform="translate(117.589 616.324) rotate(-21)" fill="#ffd880"/><path d="M10.227,25.625S.148,24.461,0,17.985,25.465,0,25.465,0,7.927,11.509,8.075,17.985,10.227,25.625,10.227,25.625Z" transform="translate(162.341 622.781) rotate(108)" fill="#ffd880"/></g></g></svg>
                <div class="companyname    " style="font-size: 1rem;">
                    <h3 class="m-0 smalle " style="font-size: 1.5em;" >Image</h3>
                    <h6 class="mb-0 ml-2 mt-1 pl-3"> gallery</h6>
                    
                </div>
            </div>

            <div class=" d-flex  justify-content-end  col-lg-6  p-0 m-0 " style="text-decoration: none;">
               <ul class="mb-0 d-flex align-items-center" style="list-style-type: none;">
                    <!-- Nav Item - User Information -->
                    <li class="nav-item ">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-inline text-gray-600 small text-white " >Atish</span>
                            <img class="img-profile rounded-circle"
                                src="img/Ellipse22.png" style="width: 30px ; height: 30px;">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="feedback.php" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                <a href="feedback.php">Logout</a>
                            </a>
                        </div>
                    </li>
               </ul>
           </div>
        </div>     
    </div>


    <!-- sidebar start -->
    <div class="col-12  p-0 d-lg-flex" style="background-image: linear-gradient(to bottom, #0575E6 , #021B79);">
        
        <div class="  justify-content-start  col-lg-3 col-sm-12  p-0 d-inline " style="background: linear-gradient(45deg blue black);" > 
        <nav class="navbar navbar-expand-lg navbar-light p-0 ">
                
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            
            
            <div class="collapse navbar-collapse " id="navbarText">
              <ul class=" d-block  p-0" style="width: 100%; font-size: 1.2rem;" >
                <div class="d-flex px-3 py-2 pl-5   shadow " style="background-color:#1e3c72;">
                    <img src="img/Ellipse22.png" class="ml-5" alt="" style="width: 40px; height: 40px;">
                    <div class="companyname text-center">
                       <h3 class="mb-0 smalle " style="font-size: 1rem; font-family:Georgia, 'Times New Roman', Times, serif;" >Atish Lote</h3>
                       <h6 class="mb-0 ml-4 mt-1 pl-3" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: .7rem;"> WebDeveloper</h6>
                       
                   </div>
                </div>

                <a href="dashboard.php"><div class=" sidover pl-5 w-100  active " >Dashboard</div></a>
                <a href="category/acategory.php"><div class=" sidover pl-5 ">Add Category</div></a>
                <a href="category/editcategory.php"><div class=" sidover pl-5 ">Edit Catagory</div></a>
                <a href="addimages/editimage.php"><div class=" sidover pl-5 ">Edit Image</div></a>
                <a href="addimages/uploadimge.php"><div class=" sidover pl-5 ">Uplode Image</div></a>
                <a href="acontact.php"><div class=" sidover pl-5  ">Contact</div></a>
                <a href="#"><div class=" sidover pl-5 text-dark">Feedback</div></a>
                
                <div class="  pl-5  " style="font-size: .9em; color: rgb(203, 203, 212);  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;" data-toggle="collapse"  href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                    Archived
                      <div class="row">
                        <div class="col">
                          <div class="collapse multi-collapse" id="multiCollapseExample1" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            <a href="category/archivedcategory.php"><div class=" sidover pl-5 ">Archived Catagory</div></a>
                            <a href="addimages/archivedimage.php"><div class=" sidover pl-5 ">Archived Image</div></a>
                            <a href="archivedcontact.php"><div class=" sidover pl-5 ">Archived Contact</div></a>
                            <a href="archivedfeedback.php"><div class=" sidover pl-5 ">Archived Feedback</div></a>
                          </div>
                        </div>
                        
                      </div>   
                </div>
                  
              </ul>  
            </div>
          </nav>
        </div>

        <!-- body -->
        <main class="col-lg-9 border border-white d-lg-inline d-sm-block  bg-white p-0 " style="height: 91vh; border-width: 0rem ;">
            <div class="demoFont justify-content-center d-flex p-3" > Feedback List</div>

            <div class="  row m-0 " style="overflow: auto ; max-height: 85%; background-color:#E1E1DC;" >
              <table class="table table-striped table-bordered bordered-primary table-hover  " >
                <thead  class="bg-primary ">
                  <tr  >
                    <th scope="col">Sr.no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    
                    <th scope="col">Action</th>
                  </tr>
                </thead>

                <tbody>
                  <?php 

                    while ($data = $result->fetch_object())  {
                      echo "<tr> ";
                      echo "<td> $data->id </td>";
                      echo "<td> $data->fname </td>";
                      echo "<td> $data->femail </td>";
                      echo "<td> $data->fmessage  </td>";
                      
                      
                      echo "<td>";
                        echo"<a href='delete.php?deletefId=$data->id' class='btn btn-danger btn-sm'>Delete</a>";
                      echo"</td>";
                      echo "</tr>";
                    }


                ?>
                </tbody>
                  
              </table>
            </div>
           
            
        </main>
    </div>
    <!-- body end -->
    </div>
    <!-- sidebar end -->


    

    
    




    <script src="js/jqurey.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>