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
    .texteditor{
        padding: 40px;
        line-height: 30px;
    }
    .holder{
        margin-left: 50px;
        margin-right: 50px;
    }
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
<div class=" container-scroller">
<?php include "sidenav.php" ?>
  <div class="content-wrapper">
     <h3 class="page_title text-center mb-4">ABOUT</h3>
     <hr>
     <div class="row mb-12">
        <div class="col-lg-12 mb-12">
            <div class="">
                <br>
                <div class="card-block holder">
                    <div class="texteditor">
                    Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    <br>
                    <br>
                    Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
                    </div>
                </div>
            </div>

             <center><br><input type='submit' value='SAVE' id='btnsave'></center>

         </div>         
     </div>
  </div>
</div>  
</html>