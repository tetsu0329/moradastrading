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
<body>
<div class="container-scroller">
<?php include "sidenav.php" ?>
  <div class="content-wrapper">
                    <h3 class="page_title text-center mb-4">DASHBOARD</h3>
                    <hr>
                    <br>
                      <div class="row xl-6">
                        <div onclick="window.location='users.php';"  class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                            <div class="card">
                                <div class="card-block">
                                    <div class="clearfix">
                                        <i class=" float-right icon-grey-big text-success"></i>
                                    </div>
                                    <h4 class="card-title font-weight-normal"><?php echo $usercount ?></h4>
                                    <h6 class="card-subtitle mb-4">USERS</h6>
                                    <div class="progress">
                                        <div class="progress-bar bg-success-gadient progress-slim" role="progressbar" style="width: <?php echo $userpercent.'%'; ?>" aria-valuenow="<?php echo $usercount ?>" aria-valuemin="0" aria-valuemax="100000"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div onclick="window.location='ordertrack.php';" class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                            <div class="card">
                                <div class="card-block">
                                    <div class="clearfix">
                                        <i class=" float-right icon-grey-big text-info"></i>
                                    </div>
                                    <h4 class="card-title font-weight-normal"><?php echo $ordercount ?></h4>
                                    <h6 class="card-subtitle mb-4">ORDERS</h6>
                                    <div class="progress">
                                        <div class="progress-bar bg-info-gadient progress-slim" role="progressbar" style="width: <?php echo $paidpercent.'%'; ?>" aria-valuenow="<?php echo $paidcount; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div onclick="window.location='bankdeposit.php';"  class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                            <div class="card">
                                <div class="card-block">
                                    <div class="clearfix">
                                        <i class=" float-right icon-grey-big text-secondary"></i>
                                    </div>
                                    <h4 class="card-title font-weight-normal"><?php echo $inquirycount; ?></h4>
                                    <h6 class="card-subtitle mb-4">INQUIRY</h6>
                                    <div class="progress">
                                        <div class="progress-bar bg-secondary-gadient progress-slim" role="progressbar" style="width: <?php echo $pendingpercent.'%'; ?>" aria-valuenow="<?php echo $pendingcount; ?>" aria-valuemin="0" aria-valuemax="100000"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div onclick="window.location='products.php';" class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                            <div class="card">
                                <div class="card-block">
                                    <div class="clearfix">
                                        <i class=" float-right icon-grey-big text-warning"></i>
                                    </div>
                                    <h4 class="card-title font-weight-normal"><?php echo $productcount?></h4>
                                    <h6 class="card-subtitle mb-4">PRODUCTS</h6>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning-gadient progress-slim" role="progressbar" style="width: <?php echo $productpercent.'%'; ?>" aria-valuenow="<?php echo $productcount ?>" aria-valuemin="0" aria-valuemax="100000"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<!--                    <div class="row">
                        <div class="col-lg-6  mb-4">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title mb-4"></h5>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6  mb-4">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title mb-4"></h5>
                                                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 mb-4">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title mb-4"></h5>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 mb-4">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title"></h5>
                                    <div style="min-height:415px;">
                                    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.8331722507537!2d121.02310586483968!3d14.55153088983368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c91b3ef40b79%3A0x23de027bdc503800!2sGlorietta!5e0!3m2!1sen!2sph!4v1509335923549" width="100%" height="415" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="container-fluid clearfix">
                      <span class="float-right">
                          <a href="#">Morada</a> &copy; 2018
                      </span>
                    </div>
                </footer> -->
            </div>
        </div>   
</div>
</body>
</html>