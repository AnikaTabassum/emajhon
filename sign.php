<?php

include('header.php');
?>
<h2 align="center"> Create account </h2>
            <h4 align="center"> Get started with you free account </h4>
            <div class="form-row" align="center">
   
        <div class="col-md-6">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="username" type="text" class="form-control" name="username" placeholder="Username">
    </div>
    <br>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input id="email" type="text" class="form-control" name="email" placeholder="Email">
    </div>
    <br>

    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="password" type="password" class="form-control" name="password" placeholder="Password">
    </div>
    <br>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-ok-sign"></i></span>
      <input id="cpassword" type="password" class="form-control" name="cpassword" placeholder="Confirm Password">
    </div>
    <br>
    <button type="button" class="btn btn-success  center-block btn-group-justified " > Sign Up</button>
  </div>
</div>
  <h4 align="center">Already have an account? <a href="login.html" target="_blank" color:blue> Login</a></h4>
  
    </div>
<?php
include('footer.php');
?>