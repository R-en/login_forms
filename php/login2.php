<?php
        require 'header.php';
?>

    <main>
        <button type="button" class="btn btn-primary mr-2" data-toggle="modal" 
                          data-target="#login-modal"> Login </button>
        <div class="modal fade card" id="login-modal" tabindex="-1" role="dialog" 
                         aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content card-body">
                    
                   <div class="modal-header" align= "center">
                     <h5 class="modal-title card-title mb-4">Login to your Greeen Guide</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true">&times;</span>
                     </button>
                    </div><!--modal-header-->
                    
                    <div class="modal-body">
                        <form action="includes/login.inc.php" method="post">
                                <input type="text" class="form-control" name="mailuid" placeholder="Username/email">
                            
                                 <input type="password" class="form-control" name="pwd" placeholder="Password">
                           
                            <input type="submit" class="btn btn-primary btn-lg btn-block" name="login_submit" value="login">
                            <p>Not registered yet? <a href='signup.php'>Register Here</a></p>
                        </form>
                    </div><!--modal-body-->
            </div><!--modal-content-->
        </div><!--modal-dialog-->
     </div><!--log in modal-->
  </main>

<?php
        require 'footer.php';
?>