<?php
        require 'header.php';
?>

    <main class=" mt-3">
        <div class="container row justify-content-md-center">
          <div class="card col-md-6" >
            <div class="card-header mt-1">
                 <h5 class="card-title mb-4">Sign Up</h5>
            </div>  
              
            <?php
              /*if(isset($_GET['error'])){
                  if($_GET['error'] == "emptyfields"){
                      echo '<p>Fill in all fields!</p>';
                  } else if($_GET['error'] == "invaliduidmail"){
                      echo '<p>Invalid user and email!</p>';
                  } else if($_GET['error'] == "invaliduid"){
                      echo '<p>Invalid user!</p>';
                  } else if($_GET['error'] == "invalidmail"){
                      echo '<p>Invalid email!</p>';
                  } else if($_GET['error'] == "passwordcheck"){
                      echo '<P>Password do not match!</p>';
                  } else if($_GET['error'] == "usertaken"){
                      echo '<P>User already taken!</p>';
                  }
              }
              else if($_GET['signup'] == "success"){
                      echo '<P>You have successfully signed up!</p>';
              }*/
            ?>
              
            <div class="card-body">
                            <form action="includes/signup.inc.php" method="post">
                                <div class="form-group">
                                     <input type="text" class="form-control" name="uid" placeholder="Username">
                                </div>
                                <div class="form-group">
                                     <input type="text" class="form-control" name="mail" placeholder="Email">
                                </div>
                                <div class="form-group">
                                     <input type="password" class="form-control" name="pwd" placeholder="Password">
                                </div>
                                <div class="form-group">     
                                    <input type="password" class="form-control" name="pwd_repeat" placeholder="Repeat Password">
                                </div>
                               <input type="submit" class="btn btn-primary btn-lg btn-block" name="signup_submit" value="Sign Up">
                             </form>
                         </div>
              <div class="container">
                 <P class="mr-6">Already a user? <a type="button" class="btn btn-primary" href="login.php">Login</a> </P>
             </div>
        </div><!--end of card-->
        
        </div>
    </main>
<?php
        require 'footer.php';
?>