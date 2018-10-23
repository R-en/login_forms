<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <title>Green Guide</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-light navbar-expand-sm">
        <!--<div href="#" class="navbar-brand">
                    <img src="images/map-marker.svg" alt="Map icon" width="50px">
                    <span>Love Green Guide</span>
                </div>-->
          <div class="container">
              <div class="navbar-nav navbar-left">
                 <a class="nav-item nav-link active" href="index.php"><img src="../images/home.svg" alt="Home Icon" width="25px"></a>
                 <a class="nav-item nav-link" href="#">My Reviews</a>
                 <a class="nav-item nav-link" href="#">Write a Community Review</a>
                 <a class="nav-item nav-link" href="#">Explore Reviews on a Map</a>
                 <a class="nav-item nav-link" href="#">Guidelines</a>
                 <div class="dropdown"><!--User Guide Dropdown-->
                              <a class="nav-item nav-link dropdown-toggle"
                                 data-toggle="dropdown" id="servicesDropdown" aria-haspopup="true" aria-expanded="false"
                                 href="#">User Guide</a>
                              <div class="dropdown-menu" aria-labelledby="userGuideDropdown">
                                  <a class="dropdown-item" href="#">Pollution Measurement Guide</a>
                                  <a class="dropdown-item" href="#">Pollution Impact</a>  
                                  <a class="dropdown-item" href="#">Successful Enviromental Restore Cases</a>
                              </div>
                          </div><!--User Guide Dropdown ends-->
                 <div class="dropdown"><!--About Us Dropdown-->
                              <a class="nav-item nav-link dropdown-toggle"
                                 data-toggle="dropdown" id="aboutUsDropdown" aria-haspopup="true" aria-expanded="false"
                                 href="#">About Us</a>
                              <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                                  <a class="dropdown-item" href="#">About Us</a>
                                  <a class="dropdown-item" href="#">Join Us</a>  
                                  <a class="dropdown-item" href="#">Contact Us</a>
                              </div>
                          </div><!--About Us Dropdown-->
              </div><!-- navbar -->
              <div class="navbar-nav navbar-right"> <!--right navbar-->
                  
                <?php
                  
                if(isset($_SESSION['userID'])){
                  
                  echo '<div class="dropdown">
                              <a class="nav-item nav-link dropdown-toggle"
                                 data-toggle="dropdown" id="usersDropdown" aria-haspopup="true" aria-expanded="false"
                                 href="#">'. $_SESSION["userUID"]. '</a>
                              <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                                  <a class="dropdown-item" href="#">My Reviews</a>
                                  <a class="dropdown-item" href="#">User Info</a>  
                                  <a class="dropdown-item" href="#">
                                    <form action="includes/logout.inc.php" method="post">
                                        <button class="btn btn-primary" type="submit" name="logout_submit">Logout</button>
                                    </form>
                                  </a>
                              </div>
                       </div>
            
                  <form action="includes/logout.inc.php" method="post">
                     <button class="btn btn-primary" type="submit" name="logout_submit">Logout</button>
                  </form>';
            
                }
                else{
                    echo '
                     <button type="button" class="btn btn-primary mr-2" data-toggle="modal" 
                          data-target="#login-modal"> Login </button>
                     <div class="modal fade card " id="login-modal" tabindex="-1" role="dialog" 
                         aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content card-body">
                               <div class="modal-header" align= "center">
                                     <h5 class="modal-title card-title mb-4">Login to your Greeen Guide</h5>
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span class="glyphicon glyphicon-remove" aria-hidden="true">&times;</span>
                                     </button>
                                    </div><!--modal-header-->
                                 <div >
                                     <form ><!--begins login form-->
                                        <div class="modal-body">
                                            <form action="includes/login.inc.php" method="post">
                                                <div class="form-group">
                                                     <input type="text" class="form-control" name="mailuid" placeholder="Username/email">
                                                </div>
                                                <div class="form-group">
                                                   <input type="password" class="form-control" name="pwd" placeholder="Password">
                                                </div>
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" name="login_submit" value="Login">
                                            </form>
                                            </div><!--modal-body-->
                                            <p>Not registered yet? <a href="signup.php">Register Here</a></p>
                                     </form><!--ends login form-->
                                </div><!--end of forms-->
                            </div><!--modal-content-->
                         </div><!--modal-dialog-->
                    </div><!--log in modal-->
                 <a type="button" class="btn btn-primary" href="signup.php" >Sign Up</a>
                ';
                }
            
                ?>
                <a class="nav-item nav-link" href="#">中文</a>
              </div><!--right navbar ends-->
          </div><!-- container -->
        </nav><!-- nav -->
    </header>

