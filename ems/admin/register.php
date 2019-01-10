<?php include "../auth/auth.php";?>
<?php include "authentication.php";?>
<html>

<head>
<title>Register</title>
<link rel="stylesheet" href="../css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
function formvalidation(){
	var name=$('#inputName').val();
	var email=$('#inputEmail').val();
	var password=$('#inputPassword').val();
	var passlength=$('#inputPassword').val().length;
	
	if(name=='')
	{
		alert("Please Enter your name");
		return false;
		
	}
	if(email=='')
	{
		alert("Please Enter your email");
		return false;
		
	}
	if(password=='')
	{
		alert("Please Enter your password");
		return false;
		
	}
	if(passlength<=4)
	{
		alert("Please Enter minimum 5 digit password");
		return false;
		
	}
}
</script>

</head>
<body>
<!------including header here --------->
<?php include "header.php";?>
<!------end header here --------->

<div class="container">
<div class="col-xs-6 col-xs-push-3 well">

<!------ register form start from here ---------------------->
<form class="form-horizontal" method="post" action="insert-user.php" onsubmit="return formvalidation();">
  <fieldset>
    <legend>Register</legend>
	<?php 
	if(isset($_SESSION['success']))
	{
		echo $_SESSION['success'];
		unset($_SESSION['success']);
	}
	?>
	<div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Name">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password">
        
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-lg-2 control-label">Department</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input type="radio" name="depart" id="depart" value="Web Development" checked="">
            Web Development
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="depart" id="depart" value="SEO">
          SEO
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Role</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input type="radio" name="role" id="role" value="admin" checked="">
           Admin
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="role" id="role" value="employee">
          Employee
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>

<!------------------------register form end here----------------->
</div>
</div>
</body>
</html>