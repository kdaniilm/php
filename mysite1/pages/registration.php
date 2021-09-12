<h3>Registration</h3>
<?php 
include_once("services/registrationService.php");
  if(!isset($_POST["regbtn"])){  ?>

<form action="index.php?page=4" method="POST">

<div class="form-group">
<input placeholder="Insert your login" type="text" class="form-control" name="login">
</div>

<div class="form-group">
<input placeholder="Insert your password" type="text" class="form-control" name="password">
</div>

<div class="form-group">
<input placeholder="Confirm your password" type="text" class="form-control" name="confirmPass">
</div>

<button type="submit" class="btn btn-primary col-sm-12 col-md-12 col-lg-12" name="regbtn">Register</button>
</form>

<?php 
  }
  else{
    if(Registration($_POST["login"], $_POST["password"], $_POST["confirmPass"])){
        echo "<h3 style='color:green'>NEW USER ADDED</h3>";
    }
  }
  ?>