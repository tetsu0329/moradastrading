<?php

if(isset($_POST['logoutbtn'])){
echo "<script>";
        echo "if (confirm('Are you sure you want to logout?') == true) {
            window.location.replace('../logout.php');
        } 
        else {
            //
        }
    </script>";
}

$hide_admin="";

// if ($_SESSION['admin_type']=='Admin') {
 
//   $hide_admin="block";   

// }
// else{

//    $hide_admin="none"; 

// }
// ?>	
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Dashboard</title>
      <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
      <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
      <link rel="stylesheet" href="css/style.css"/>
      <link rel="shortcut icon" href="images/favicon.png"/>


      <script src="node_modules/jquery/dist/jquery.min.js"></script>
      <script src="node_modules/tether/dist/js/tether.min.js"></script>
      <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
      <script src="node_modules/chart.js/dist/Chart.min.js"></script>
      <script src="node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
      <script src="js/off-canvas.js"></script>
      <script src="js/hoverable-collapse.js"></script>
      <script src="js/misc.js"></script>
      <script src="js/chart.js"></script>
      <script src="js/maps.js"></script>
</head>
<style type="text/css">
</style>
<body>
<!--Modal for updating a account --> 
   <div class="modal fade" id="editacc" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
         <h4 class="modal-title">Edit Account</h4>
          <button style="position:fixed;right:10px;" type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <div class="form-group col-lg-12 mb-4">
        <input required type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp"  name="editprofile" value="Choose Photo" accept="image/*" onchange="loadFile2(event)">
        <center><img width="50%" height="220" style="border-radius:100%;" src="images/user.png" id="updt"/></center>
        <script>
           var loadFile2 = function(event) {
             var output = document.getElementById('updt');
            output.src = URL.createObjectURL(event.target.files[0]);
            };
        </script>
        </div> 
          <div class="form-group">
              <label for="exampleInputPassword1">Name</label>
              <input type="text" class="form-control p-input" id="exampleInputPassword1">
          </div>
          <div class="row">
           <div class="form-group col-lg-6">
              <label for="exampleInputPassword1">Username</label>
              <input type="text" class="form-control p-input" id="exampleInputPassword1">
          </div>
           <div class="form-group col-lg-6">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control p-input" id="exampleInputPassword1">
          </div>
          </div>
        </div>
        <div class="modal-footer">

          <button  class="btn btn-outline-primary"  name="updtsliderbtn">Save</button>
          <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<!-- End of the modal-->  
<nav style="background:#313232;" class="navbar bg-primary-gradient col-lg-12 col-12 p-0 fixed-top navbar-inverse d-flex flex-row">
            <div  style="background:rgba(0,0,0,0.3);" class="bg-white text-center navbar-brand-wrapper">
                <a class="navbar-brand brand-logo" href="dashboard.php"><img height="45" src="images/logo1.png"/></a>
                <a class="navbar-brand brand-logo-mini" href="dashboard.php"><img height="45" src="images/logo1.png"/></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">
                <button class="navbar-toggler navbar-toggler hidden-md-down align-self-center mr-3" type="button" data-toggle="minimize">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <form class="form-inline mt-2 mt-md-0 hidden-md-down">
                    <input class="form-control mr-sm-2 search" type="text" id="myInput" placeholder="Search">
                </form>
                <ul class="navbar-nav ml-lg-auto d-flex align-items-center flex-row">
                    <li class="nav-item">
                        <a class="nav-link profile-pic" href="#"><img class="rounded-circle" src="images/user.png" alt=""></a>
                    </li>
                   <li class="nav-item">
                        <form method="POST"> <button class="nav-link" name="logoutbtn" style="background:none;border:none;" title="log-out"><i class="fa fa-sign-out"></i></button></form>
                   </li>
                </ul>
               <button class="navbar-toggler navbar-toggler-right hidden-lg-up align-self-center" type="button" data-toggle="offcanvas">
                  <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <!--End navbar-->
        <div  class="container-fluid">
            <div class="row row-offcanvas row-offcanvas-right">
                <nav class="bg-secondary sidebar sidebar-fixed sidebar-offcanvas" id="sidebar">
                <div class="user-info">
                    <img data-toggle="modal" data-target="#editacc" src="images/user.png" alt="">
                    <p class="name">Wangja Ju</p>
                    <p class="text text-center text-primary">Manager</p>
                    <span class="online"></span>
                </div>
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">
                                <!-- <i class="fa fa-dashboard"></i> -->
                                <img src="images/icons/1.png" alt="">
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item" style="display: <?php echo $hide_admin ?>">
                            <a class="nav-link" href="manageadmins.php">
                                <!-- <i class="fa fa-dashboard"></i> -->
                                <img src="images/icons/users.png" alt="">
                                <span class="menu-title">Administrators</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                <!-- <i class="fa fa-address-book"></i> -->
                                <img src="images/icons/6.png" alt="">
                                <span class="menu-title">File Management<i class="fa fa-sort-down"></i></span>
                            </a>
                            <div class="collapse" id="collapseExample">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="products.php">
                                     Products
                                    </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="ordertrack.php">
                                      Order Track
                                    </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="Material.php">
                                      Materials + Colors
                                    </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="colorswatch.php">
                                      Customization
                                    </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="users.php">
                                      Customers
                                    </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                                <!-- <i class="fa fa-address-book"></i> -->
                                <img src="images/icons/8.png" alt="">
                                <span class="menu-title">Manage Front End<i class="fa fa-sort-down"></i></span>
                            </a>
                            <div class="collapse" id="collapseExample1">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.php">
                                     About Us
                                    </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.php">
                                      Contact Us
                                    </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="slider.php">
                                      Home Page Slider
                                    </a>
                                    </li>
                                     <li class="nav-item">
                                        <a class="nav-link" href="headers.php">
                                      Headers
                                    </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
</body>
</html>