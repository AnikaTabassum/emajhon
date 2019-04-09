<?php

include('header.php');
?>
<h2 > Login </h2>
            <h4 > Don't have an account? <a href="sign.html" target="_blank"color:blue> Sign Up</a></h4>
             
    <div class="form-row">
   
    <div class="col-md-6">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="username2" type="text" class="form-control" name="username" placeholder="Username">
    </div>
    <br>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="password" type="password" class="form-control" name="password" placeholder="Password">
    </div>
    <br>
    <button type="button" class="btn btn-success  center-block btn-group-justified  " > Login</button>
    <h4 > Forget Password? <a href="forget.html" target="_blank"color:blue> Change Password</a></h4>
</div>
<?php
include('footer.php');
?>