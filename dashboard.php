

<?php 
    require 'session.php';

    $username = $_SESSION['name'];


    $con = new mysqli("localhost" , "root" , "" ,"i_g");

    $query = "SELECT * FROM  image WHERE delete_image_id = 0";

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
    
    


    <!-- css file link-->
    
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.green.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    


</head>

<body  style="text-decoration: none;" >
    
    <div class="row m-0 p-0">
        <div class="d-flex col-lg-12 col-md-12 col-sm-12 px-lg-5  " style="background-color:#e67e22;"  >
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
                        <a class=" dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration: none;">
                            <span class="mr-2 d-none d-inline text-gray-600 small text-white " ><?php echo $username; ?></span>
                            <img class="img-profile rounded-circle"src="img/user.png" style="width: 30px ; height: 30px;">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow "
                            aria-labelledby="userDropdown">
                            
                            <a class="dropdown-item" href="logout.php" >
                                
                                Logout
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
                    <img src="img/user.png" class="ml-5" alt="" style="width: 40px; height: 40px;">
                    <div class="companyname text-center">
                       <h3 class="mb-0 smalle " style="font-size: 1rem; font-family:Georgia, 'Times New Roman', Times, serif;" > <?php echo $username; ?> </h3>
                       <h6 class="mb-0 ml-4 mt-1 pl-3" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: .7rem;"> welcome back</h6>
                       
                   </div>
                </div>

                <a href="#"><div class=" sidover pl-5 w-100  active text-dark" >Dashboard</div></a>
                <a href="category/acategory.php"><div class=" sidover pl-5 ">Add Category</div></a>
                <a href="category/editcategory.php"><div class=" sidover pl-5 ">Edit Catagory</div></a>
                <a href="addimages/editimage.php"><div class=" sidover pl-5 ">Edit Image</div></a>
                <a href="addimages/uploadimge.php"><div class=" sidover pl-5 ">Uplode Image</div></a>
                <a href="acontact.php"><div class=" sidover pl-5 ">Contact</div></a>
                <a href="afeedback.php"><div class=" sidover pl-5 ">Feedback</div></a>
                
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
        <!-- sidebar end -->


        <!-- body -->

        <!-- body -->
        <main class="col-lg-9 border border-white d-lg-inline d-sm-block    p-0 " style="min-height: 91vh; border-width: 0rem ; background-color:#E1E1DC">
            <!-- <div class="demoFont justify-content-center d-flex p-3"> Dashboard</div> -->
            <div class="owl-carousel owl-theme  pl-3 shadow bg-light pr-3" style="margin-top: 0px;">
                <?php 
                    while ($data= $result->fetch_object()) {
                     for ($i=0; $i < 1; $i++) { 
                    
                     
                    
                    
                    
                 ?>
                <a href="addimages/archivedimage.php"><div class="item "><?php echo "<img src='addimages/upload/$data->image_name'>"; ?></div></a>
                <?php 
                }

                } ?>
            </div>


            <div class="pt-2 px-3">
                <ul class="nav  nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Category</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Edit</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Archived</a>
                    </li>
                
                
                  </ul>

                  <!-- category -->
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row  m-0 p-2 border d-flex justify-content-between " style="min-height: 58vh; width: 100%; background: #FBFBFB; overflow: auto;">  

                            <?php 
                            require'dashgatedata.php';
                                while ($datab=$resultb->fetch_object()) {
                                    $count = 1;
                                
                             ?>
                            <div class="card   rhtborder  col-12 col-lg-3 mx-1  my-2" style=" max-height: 100px; border-color:#2980b9 ; color:#2980b9; background: #E1E1DC ;" >
                                   <div class="card-body p-0">
                                      <h5 class="card-title text-dark"> <?php echo "$datab->add_category"; ?></h5>
                                      <?php 
                                      
                                      
                                        if ($count=$datab->id) {

                                            //write query
                                            $queryc = "SELECT cat_id  FROM image WHERE cat_id='$count' ";

                                            //exacute query
                                            $resultc = $con->query($queryc);

                                            

                                            $c = mysqli_num_rows($resultc);
                                           
                                            
                                           
                                        }
                                        ?>
                                        <div class="text-group d-flex text-dark">
                                            <h2 class="text-primary"><?php echo "$c"; ?></h2>
                                            <h6>+</h6>
                                            <h4 class="float-right">img</h4>
                                        </div>


                                    </div>
                            </div>

                            <!-- row 2 -->
                            
                            <?php  } ?>
                        </div>
                    </div>

                    <!-- edit -->
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row  m-0 p-0 border  " style=" width: 100%; background: #FBFBFB; overflow: auto;">                            
                            <div class="card-deck text-white col-12  mt-3  m-0 px-1 d-flex justify-content-between"  >
                                <!-- card 1 -->
                                <div class="card  mb-3 border border-dark  col-4 col-lg-4" style="  color:chocolate; background: #E1E1DC ;" >
                                   <div class="card-body py-0">
                                      <h5 class="card-title">Add Category</h5>
                                     <a href="" class="d-flex justify-content-between">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-border-style" viewBox="0 0 16 16">
                                        <path d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-1zm0 4a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-1zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm8 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-4 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm8 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-4-4a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-1z"/>
                                      </svg>
                                      <span><h3>Go</h3></span>
                                    </a>
                                    </div>
                                </div>
                                <!-- card 2 -->
                                <div class="card   mb-3 border border-dark  col-4 col-lg-4"  style="  color:#27ae60; background: #E1E1DC ;">                               
                                    <div class="card-body py-0">
                                      <h5 class="card-title">Add Image</h5>
                                      <a href="" class="d-flex justify-content-between">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
                                          <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                          <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
                                        </svg>
                                        <span><h3>Go</h3></span>
                                      </a>
                                    </div>
                                </div>
                                <!-- card 3 -->
                                <div class="card  mb-3 border border-dark  col-4 col-lg-4"   style="  color:#8e44ad; background: #E1E1DC ;">                               
                                    <div class="card-body py-0">
                                      <h5 class="card-title">List Contact</h5>
                                      <a href="" class="d-flex justify-content-between">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                          <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                                        </svg>
                                        <span><h3>Go</h3></span>
                                      </a>
                                    </div>
                                </div>
                            </div>

                            <!-- row 2 -->
                            <div class="card-deck text-white col-12  mt-4  m-0 px-1 d-flex justify-content-between"  >
                              <!-- card 1 -->
                              <div class="card  mb-3 border border-danger  col-4 col-lg-4" style="  color:chocolate; background: #E1E1DC ;" >
                                 <div class="card-body py-0">
                                    <h5 class="card-title">Edit Category</h5>
                                   <a href="" class="d-flex justify-content-between">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 30 30">
                                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg>
                                    <span><h3>Go</h3></span>
                                  </a>
                                  </div>
                              </div>
                              <!-- card 2 -->
                              <div class="card   mb-3 border border-danger  col-4 col-lg-4"  style="  color:#27ae60; background: #E1E1DC ;">                               
                                  <div class="card-body py-0">
                                    <h5 class="card-title">Edit Image</h5>
                                    <a href="" class="d-flex justify-content-between">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg>
                                      <span><h3>Go</h3></span>
                                    </a>
                                  </div>
                              </div>
                              <!-- card 3 -->
                              <div class="card  mb-3 border border-danger  col-4 col-lg-4"   style="  color:#8e44ad; background: #E1E1DC ;">                               
                                  <div class="card-body py-0">
                                    <h5 class="card-title">List Feedback</h5>
                                    <a href="" class="d-flex justify-content-between">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg>
                                      <span><h3>Go</h3></span>
                                    </a>
                                  </div>
                              </div>
                          </div>
                        </div>                       
                    </div>

                    <!-- archived -->
                 <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="profile-tab">
                      <div class="row  m-0 p-0 border  " style="min-height: 58vh; width: 100%; background: #FBFBFB; overflow: auto;">                            
                          <div class="card-deck text-white col-12  mt-3  m-0 px-1 d-flex flex-column"  >
                              <!-- card 1 -->
                              <div class="card  mb-3 rhtborder  col-11 col-sm-8 col-md-6 col-lg-4" style=" border-color:#2980b9 ; color:darkgray; background: #E1E1DC ;" >
                                <div class="card-body py-0 ">
                                  <h5 class="card-title">Archived Category</h5>
                                 <a href="" class="d-flex justify-content-between">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16">
                                    <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z"/>
                                  </svg>
                                  <span><h3>read More</h3></span>
                                </a>
                                </div>
                              </div>
                              <!-- card 2 -->
                              <div class="card  mb-3 rhtborder  col-11 col-sm-8 col-md-6 col-lg-4" style=" border-color:cyan ; color:darkgray; background: #E1E1DC ;" >
                                <div class="card-body py-0 ">
                                  <h5 class="card-title">Archived Contact</h5>
                                 <a href="" class="d-flex justify-content-between">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16">
                                    <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z"/>
                                  </svg>
                                  <span><h3>read More</h3></span>
                                </a>
                                </div>
                              </div>
                              <!-- card 3 -->
                              <div class="card  mb-3 rhtborder  col-11 col-sm-8 col-md-6 col-lg-4" style=" border-color:darkgoldenrod ; color:darkgray; background: #E1E1DC ;" >
                                <div class="card-body py-0 ">
                                  <h5 class="card-title">Archived Feedback</h5>
                                 <a href="" class="d-flex justify-content-between">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16">
                                    <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z"/>
                                  </svg>
                                  <span><h3>read More</h3></span>
                                </a>
                                </div>
                              </div>

                              
                          </div>

                          
                          </div>
                      </div>                       
                  </div> 
                  </div>
            </div>
          
          

          
        </main>
        <!-- body -->
    </div>
    

    
    



    <script src="js/owljquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    
    
    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
            loop:true,
            margin:15,
            autoplay:true,
            stagePadding: 50,
            autoplayTimeout:2000,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
        })
    </script>
</body>

</html>