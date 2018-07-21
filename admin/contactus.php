<?php
	include('connection/conn.php');
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Morada's Trading | Admin</title>
      <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
      <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
      <link rel="stylesheet" href="css/style.css"/>
      <link rel="shortcut icon" href=""/>	
</head>
<style type="text/css">

    #btnsave{
    width: 250px;
    height: 40px;
    cursor: pointer;
    background-color: #1E1713;
    border: none;
    border-radius: 5px;
    color: #fff;
    }

    #btnsave:hover{
    background-color: transparent;
    border: 2px solid #1E1713;
    color: #1E1713;
    }

</style>
<body>
<div class="container-scroller">
<?php include "sidenav.php" ?>
  <div class="content-wrapper">
                    <h3 class="page_title text-center mb-4">CONTACT US</h3>
                    <hr>
                    <br>
                    <h5 class="page_title text-center mb-4">Contact Details</h5>
                    <br>
                      <div class="row xl-6">
                        <div onclick="window.location='users.php';"  class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                            <div class="">
                                <div class="card-block">
                                    <div class="clearfix">
                                        <i class=" float-right icon-grey-big text-success"></i>
                                    </div>
                                   <!--  <h4 class="card-title font-weight-normal"><?php echo $usercount ?></h4> -->
                                   <img src="images/contact_icon/phone.png" style="width: 50px;"><br>
                                   <br>
                                    <h6 class="card-subtitle mb-4">0123456789</h6>
                                    <div class="progress">
                                        <div class="progress-bar bg-success-gadient progress-slim" role="progressbar" style="width: <?php echo $userpercent.'%'; ?>" aria-valuenow="<?php echo $usercount ?>" aria-valuemin="0" aria-valuemax="100000"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div onclick="window.location='ordertrack.php';" class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                            <div class="">
                                <div class="card-block">
                                    <div class="clearfix">
                                        <i class=" float-right icon-grey-big text-info"></i>
                                    </div>
                                   <!--  <h4 class="card-title font-weight-normal"><?php echo $ordercount ?></h4> -->
                                    <img src="images/contact_icon/maps.png" style="width: 50px;"><br>
                                   <br>
                                    <h6 class="card-subtitle mb-4">Metro Manila City  </h6>
                                    <div class="progress">
                                        <div class="progress-bar bg-info-gadient progress-slim" role="progressbar" style="width: <?php echo $paidpercent.'%'; ?>" aria-valuenow="<?php echo $paidcount; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                  
                    </div>  
                    <br>  
                    <h5 class="page_title text-center mb-4">Social Media</h5>
                    <br>
                      <div class="row xl-6">
                        <div onclick="window.location='users.php';"  class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                            <div class="">
                                <div class="card-block">
                                    <div class="clearfix">
                                        <i class=" float-right icon-grey-big text-success"></i>
                                    </div>
                                   <!--  <h4 class="card-title font-weight-normal"><?php echo $usercount ?></h4> -->
                                   <img src="images/contact_icon/facebook.png" style="width: 50px;"><br>
                                   <br>
                                    <h6 class="card-subtitle mb-4">/moradastrading</h6>
                                    <div class="progress">
                                        <div class="progress-bar bg-success-gadient progress-slim" role="progressbar" style="width: <?php echo $userpercent.'%'; ?>" aria-valuenow="<?php echo $usercount ?>" aria-valuemin="0" aria-valuemax="100000"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div onclick="window.location='ordertrack.php';" class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                            <div class="">
                                <div class="card-block">
                                    <div class="clearfix">
                                        <i class=" float-right icon-grey-big text-info"></i>
                                    </div>
                                   <!--  <h4 class="card-title font-weight-normal"><?php echo $ordercount ?></h4> -->
                                    <img src="images/contact_icon/twitter.png" style="width: 50px;"><br>
                                   <br>
                                    <h6 class="card-subtitle mb-4">@moradastrading</h6>
                                    <div class="progress">
                                        <div class="progress-bar bg-info-gadient progress-slim" role="progressbar" style="width: <?php echo $paidpercent.'%'; ?>" aria-valuenow="<?php echo $paidcount; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div onclick="window.location='bankdeposit.php';"  class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                            <div class="">
                                <div class="card-block">
                                    <div class="clearfix">
                                        <i class=" float-right icon-grey-big text-secondary"></i>
                                    </div>
                                    <!-- <h4 class="card-title font-weight-normal"><?php echo $inquirycount; ?></h4> -->
                                     <img src="images/contact_icon/instagram.png" style="width: 50px;"><br>
                                   <br>
                                    <h6 class="card-subtitle mb-4">@moradastrading</h6>
                                    <div class="progress">
                                        <div class="progress-bar bg-secondary-gadient progress-slim" role="progressbar" style="width: <?php echo $pendingpercent.'%'; ?>" aria-valuenow="<?php echo $pendingcount; ?>" aria-valuemin="0" aria-valuemax="100000"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <div onclick="window.location='products.php';" class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                            <div class="">
                                <div class="card-block">
                                    <div class="clearfix">
                                        <i class=" float-right icon-grey-big text-warning"></i>
                                    </div>
                                    <!-- <h4 class="card-title font-weight-normal"><?php echo $productcount?></h4> -->
                                     <img src="images/contact_icon/google-plus.png" style="width: 50px;"><br>
                                   <br>
                                    <h6 class="card-subtitle mb-4">moradastrading@gmail.com</h6>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning-gadient progress-slim" role="progressbar" style="width: <?php echo $productpercent.'%'; ?>" aria-valuenow="<?php echo $productcount ?>" aria-valuemin="0" aria-valuemax="100000"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                    <br>
                    <br>
                    <center><br><input type='submit' value='SAVE' id='btnsave'></center>s
</div>
</html>